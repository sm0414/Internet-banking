<?php

namespace App\Controller;

use App\Entity\Detail;
use App\Entity\User;
use App\Message\AddDetail;
use App\Repository\DetailRepository;
use App\Repository\UserRepository;
use Exception;
use Symfony\Component\Cache\Adapter\RedisAdapter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @Route("/api", name="api.")
 */
class ApiController extends AbstractController
{
    /**
     * @Route("/user/list", name="users_show", methods={"GET"})
     * @param UserRepository $userRepository
     * @return Json
     */
    public function getAllUsers(UserRepository $userRepository): Response
    {
        $usersArray = $userRepository->getAllUsers();

        return $this->json($usersArray);
    }

    /**
     * @Route("/user/{userId}", name="user_show_id", methods={"GET"})
     * @param Number $userId
     * @param UserRepository $userRepository
     * @return Json|String
     */
    public function getOneUser($userId, UserRepository $userRepository): Response
    {
        $user = $userRepository->getOneUser($userId);

        return $this->json($user);
    }

    /**
     * @Route("/user_detail/list", name="users_details_show", methods={"GET"})
     * @param DetailRepository $detailRepository
     * @return Json
     */
    public function getAllUsersDetails(DetailRepository $detailRepository): Response
    {
        $detailsArray = $detailRepository->getAllUsersDetails();

        return $this->json($detailsArray);
    }

    /**
     * @Route("/user_detail/{userId}", name="user_details_show_id", methods={"GET"})
     * @param Number $userId
     * @param DetailRepository $detailRepository
     * @return Json|String
     */
    public function getOneUserDetail($userId, DetailRepository $detailRepository): Response
    {
        $detailArray = $detailRepository->getOneUserDetail($userId);

        return $this->json($detailArray);
    }

    /**
     * @Route("/user/create", name="user_create", methods={"POST"})
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @param ValidatorInterface $validator
     * @return Json
     */
    public function createUser(Request $request, UserPasswordEncoderInterface $passwordEncoder, ValidatorInterface $validator)
    {
        $username = $request->request->get('username');
        $password = $request->request->get('password');
        
        $user = new User();
        $user->setUsername($username)
            ->setPassword($password)
            ->setRoles(['ROLE_USER'])
            ->setBalance(0);

        // 驗證用戶名和密碼是否合格
        $errors = $validator->validate($user);

        // 用戶名或密碼不合格則輸出錯誤
        if (count($errors) > 0) {
            $errorsArray = [];

            foreach ($errors as $error) {
                $errorsArray[] = $error->getMessage();
            }

            return $this->json($errorsArray);
        }

        // 密碼符合格式則Hash密碼
        $user->setPassword(
            $passwordEncoder->encodePassword($user, $password)
        );

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $userArray = [
            'id' => $user->getId(),
            'userName' => $user->getUsername(),
            'balance' => $user->getBalance()
        ];

        return $this->json($userArray);
    }

    /**
     * @Route("/user/update", name="user_update", methods={"PUT"})
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @param ValidatorInterface $validator
     * @return Json|String
     */
    public function updateUserPassword(Request $request, UserPasswordEncoderInterface $passwordEncoder, ValidatorInterface $validator)
    {
        $username = $request->request->get('username');
        $password = $request->request->get('password');

        $em = $this->getDoctrine()->getManager();

        //  若找不到用戶則拋出異常
        try {
            $user = $em->getRepository(User::class)->findOneByUsername($username);
            $user->setPassword($password);
        } catch (Exception $e) {
            return $this->json('user name does not exist');
        }

        // 驗證密碼是否合格
        $errors = $validator->validate($user);

        // 密碼不合格則輸出錯誤
        if (count($errors) > 0) {
            $errorsArray = [];

            foreach ($errors as $error) {
                $errorsArray[] = $error->getMessage();
            }

            return $this->json($errorsArray);
        }

        // 密碼符合格式則Hash密碼
        $user->setPassword(
            $passwordEncoder->encodePassword($user, $password)
        );

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $userArray = [
            'id' => $user->getId(),
            'userName' => $user->getUsername(),
            'balance' => $user->getBalance()
        ];

        return $this->json($userArray);
    }

    /**
     * @Route("/user/delete/{username}", name="user_delete", methods={"DELETE"})
     * @param String $username
     * @return String
     */
    public function deleteUser($username)
    {
        $em = $this->getDoctrine()->getManager();

        // 若找不到用戶則拋出異常
        try {
            $user = $em->getRepository(User::class)->findOneByUsername($username);

            if (!$user) {
                throw new Exception('user name does not exist');
            }
        } catch (Exception $e) {
            return $this->json($e->getMessage());
        }

        $em->remove($user);
        $em->flush();

        return $this->json('User deleted：'.$username);
    }

    /**
     * @Route("/deposit/{userId}", name="action_deposit", methods={"PUT"})
     * @param Number $userId
     * @param Request $request
     * @param UserRepository $userRepository
     * @return Json|String
     */
    public function deposit($userId, Request $request, UserRepository $userRepository)
    {
        $money = $request->request->get('money');
        $remark = $request->request->get('remark');

        $rule = "/^[^0]\d+$/";

        // 輸入金額是否符合格式
        if ($money <= 0 || !preg_match($rule, $money)) {
            return $this->json('Please enter a qualified number');
        }

        $em = $this->getDoctrine()->getManager();
        $em->getConnection()->beginTransaction();

        try {
            $user = $em->find(User::class, $userId);

            // 若找不到用戶則拋出異常
            if (!$user) {
                throw new Exception('user ID does not exist');
            }
        } catch(Exception $e) {
            return $this->json($e->getMessage());
        }

        // 更新存款後新的帳戶餘額
        $currentBalance = $money + $user->getBalance();
        $user->setBalance($currentBalance);

        // 存款明細放到Redis儲存
        $redis = RedisAdapter::createConnection('redis://redis-service');
        // 把日期Object轉String
        $date = (new \DateTime())->format('Y-m-d');

        $redis->hMSet($user->getUsername(), [
                'action' => 'Deposit',
                'money' => $money,
                'remark' => $remark,
                'currentBalance' => $currentBalance,
                'date' => $date,
                'userId' => $user->getId(),
            ]
        );

        // 異步處理明細存進資料庫
        $this->dispatchMessage(new AddDetail($user->getUsername()));

        $em->persist($user);
        $em->flush();
        $em->getConnection()->commit();

        // 回傳該用戶餘額
        $userArray = $userRepository->getOneUser($user->getId());

        return $this->json($userArray);
    }

    /**
     * @Route("/withdrawal/{userId}", name="action_withdrawal", methods={"PUT"})
     * @param Number $userId
     * @param Request $request
     * @param UserRepository $userRepository
     * @return Json|String
     */
    public function withdrawal($userId, Request $request, UserRepository $userRepository)
    {
        $money = $request->request->get('money');
        $remark = $request->request->get('remark');

        $rule = "/^[^0]\d+$/";

        // 輸入金額是否符合格式
        if ($money <= 0 || !preg_match($rule, $money)) {
            return $this->json('Please enter a qualified number');
        }

        $em = $this->getDoctrine()->getManager();
        $em->getConnection()->beginTransaction();

        try {
            $user = $em->find(User::class, $userId);

            // 若找不到用戶則拋出異常
            if (!$user) {
                throw new Exception('user ID does not exist');
            }
        } catch (Exception $e) {
            return $this->json($e->getMessage());
        }

        // 餘額不足
        if ($money > $user->getBalance()) {
            return $this->json('Insufficient balance, $' . $user->getBalance() . ' dollar left');
        }

        // 更新提款後新的帳戶餘額
        $currentBalance = $user->getBalance() - $money;
        $user->setBalance($currentBalance);

        // 提款明細放到Redis儲存
        $redis = RedisAdapter::createConnection('redis://redis-service');
        // 把日期Object轉String
        $date = (new \DateTime())->format('Y-m-d');

        $redis->hMSet($user->getUsername(), [
                'action' => 'Withdrawal',
                'money' => $money,
                'remark' => $remark,
                'currentBalance' => $currentBalance,
                'date' => $date,
                'userId' => $user->getId(),
            ]
        );

        // 異步處理明細存進資料庫
        $this->dispatchMessage(new AddDetail($user->getUsername()));

        $em->persist($user);
        $em->flush();
        $em->getConnection()->commit();


        // 回傳該用戶餘額
        $userArray = $userRepository->getOneUser($user->getId());

        return $this->json($userArray);
    }
}