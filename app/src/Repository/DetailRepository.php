<?php

namespace App\Repository;

use App\Entity\Detail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DriverManager;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Detail|null find($id, $lockMode = null, $lockVersion = null)
 * @method Detail|null findOneBy(array $criteria, array $orderBy = null)
 * @method Detail[]    findAll()
 * @method Detail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetailRepository extends ServiceEntityRepository
{
    private $userRepository;

    public function __construct(ManagerRegistry $registry, UserRepository $userRepository)
    {
        parent::__construct($registry, Detail::class);

        $this->userRepository = $userRepository;
    }

    /**
     * @return Array
     */
    public function getAllUsersDetails()
    {
        $details = $this->findAll();

        $details_Array = [];

        foreach ($details as $detail) {
            $details_Array[] = [
                'ID' => $detail->getId(),
                'userName' => $detail->getUser()->getUsername(),
                'Action' => $detail->getAction(),
                'date' => $detail->getDate(),
                'money' => $detail->getMoney(),
                'currentBalance' => $detail->getCurrentBalance(),
                'remark' => $detail->getRemark()
            ];
        }

        return $details_Array;
    }

    /**
     * @param Number $userId
     * @return Array|String
     */
    public function getOneUserDetail($userId)
    {
        try {
            $user = $this->userRepository->find($userId);

            if (!$user) {
                throw new \Exception("user ID does not exist");
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        $details = $this->findByUser($user);

        $detail_Array = [];

        foreach ($details as $detail) {
            $detail_Array[] = [
                'ID' => $detail->getId(),
                'userName' => $detail->getUser()->getUsername(),
                'Action' => $detail->getAction(),
                'date' => $detail->getDate(),
                'money' => $detail->getMoney(),
                'currentBalance' => $detail->getCurrentBalance(),
                'remark' => $detail->getRemark()
            ];
        }

        return $detail_Array;
    }
}
