<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newEncodedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    /**
     * @return Array
     */
    public function getAllUsers()
    {
        $users = $this->findAll();

        $users_Array = [];

        foreach ($users as $user) {
            $users_Array[] = [
                'id' => $user->getId(),
                'userName' => $user->getUsername(),
                'balance' => $user->getBalance()
            ];
        }

        return $users_Array;
    }

    /**
     * @param Number $userId
     * @return Array|String
     */
    public function getOneUser($userId)
    {
        try {
            $user = $this->find($userId);

            if (!$user) {
                throw new \Exception("user ID does not exist");
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        $user_Array = [
            'id' => $user->getId(),
            'userName' => $user->getUsername(),
            'balance' => $user->getBalance()
        ];

        return $user_Array;
    }
}
