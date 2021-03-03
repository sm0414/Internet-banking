<?php

namespace App\MessageHandler;

use App\Entity\Detail;
use App\Entity\User;
use App\Message\AddDetail;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class AddDetailHandler implements MessageHandlerInterface
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function __invoke(AddDetail $addDetail)
    {
        $user = $this->entityManager->find(User::class, $addDetail->getUserId());

        // 新增一筆存款明細
        $detail = new Detail();
        $detail->setAction($addDetail->getAction())
            ->setMoney($addDetail->getMoney())
            ->setRemark($addDetail->getRemark())
            ->setCurrentBalance($addDetail->getCurrentBalance())
            ->setDate($addDetail->getDate())
            ->setUser($user);

        $this->entityManager->persist($detail);
        $this->entityManager->flush();
    }
}