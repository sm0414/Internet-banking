<?php

namespace App\Controller;

use App\Entity\Detail;
use App\Form\DepositType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class WithdrawalController extends AbstractController
{
    /**
     * @Route("/withdrawal", name="withdrawal")
     */
    public function index(Request $request, Security $security): Response
    {
        $detail = new Detail();
        // 取得登入之User實體
        $user = $security->getUser();

        // 帳戶目前餘額
        $balance = $user->getBalance();

        $form = $this->createForm(DepositType::class, $detail);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            // 提款後新的帳戶餘額
            $current_balance = $balance - $data->getMoney();

            $user->setBalance($current_balance);

            $detail->setAction('Withdrawal');
            $detail->setDate(new \DateTime());
            $detail->setCurrentBalance($current_balance);
            $detail->setUser($security->getUser());


            $em = $this->getDoctrine()->getManager();
            $em->persist($detail);
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', '提款成功！');

            return $this->redirect($this->generateUrl('detail'));
        }

        return $this->render('withdrawal/index.html.twig', [
            'form' => $form->createView(),
            'balance' => $balance
        ]);
    }
}
