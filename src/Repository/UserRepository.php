<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findUserInfo($user)
    {

        $qb = $this->createQueryBuilder('u');

        $qb
            ->select('u', 'ui')
            ->from('App\Entity\UserInfo', 'ui')
            // ->innerJoin(
            //     'App\Entity\UserInfo',
            //     'ui',
            //     \Doctrine\ORM\Query\Expr\Join::WITH,
            //     'u.id = ui.user_id'
            // )
            // ->andWhere('u.username =: user')
            // ->setParameter('user', $user)
        ;

        dump($qb->getQuery()->getResult()); //pokazuje tablice w obiekcie

        return $qb->getQuery()->getResult();
    }

    public function findExpireUser()
    {
        // $qb = $this->createQueryBuilder('u');

        // $qb
        //     ->select('u, u.data_termin as data')
        //     ->andWhere('data < :now')
        //     ->setParameter('now', new \DateTime)
        // ;

        // return $qb->getQuery()->getResult();
       
        return $this->createQueryBuilder('u')
            ->andWhere('u.dataTermin < :now')
            ->setParameter('now', new \DateTime)
            ->andWhere('u.status = :status')
            ->setParameter('status', 'active')
            ->getQuery()
            ->getResult()
        ;
    }

}