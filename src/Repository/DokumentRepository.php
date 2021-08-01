<?php

namespace App\Repository;

use App\Entity\Dokument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Dokument|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dokument|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dokument[]    findAll()
 * @method Dokument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DokumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dokument::class);
    }

    // /**
    //  * @return Dokument[] Returns an array of Dokument objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dokument
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findSumaRodzaj($owner){

        $qb = $this->createQueryBuilder('d');

        $qb
            ->select('SUM(d.kwota)', 'd.rodzaj')
            ->andWhere('d.owner = :owner')
            ->setParameter('owner', $owner)
            ->andWhere('d.status = :active')
            ->setParameter('active', 'active')
            ->groupBy('d.rodzaj')
            ;

        // dump($qb->getQuery()->getResult()); //pokazuje tablice w obiekcie

        return $qb->getQuery()->getResult();

    }

    public function findSumaWszystkie($owner){

        $qb = $this->createQueryBuilder('d');

        $qb
            ->select('SUM(d.kwota)')
            ->andWhere('d.owner = :owner')
            ->setParameter('owner', $owner)
            ->andWhere('d.status = :active')
            ->setParameter('active', 'active')
        ;
        
        // dump($qb->getQuery()->getResult()); //pokazuje tablice w obiekcie

        return $qb->getQuery()->getResult();
    }

    public function findByZestawienieMiesieczne($owner){

        $qb = $this->createQueryBuilder('d');

        $qb
            ->select(
                '
                DATE_FORMAT(d.data, \'%Y-%m\') as data,
                SUM(d.kwota)
                ',
            )
            ->andWhere('d.owner = :owner')
            ->setParameter('owner', $owner)
            ->andWhere('d.status = :active')
            ->setParameter('active', 'active')
            ->groupBy('data')
            ->orderBy('data', 'DESC')
        ;
        
        #dump($qb->getQuery()->getResult()); //pokazuje tablice w obiekcie

        return $qb->getQuery()->getResult();
    }


    ###używany do testowania w route dokumenty/test
    public function findByZestawienieMiesieczneRodzaj($owner){

        $qb = $this->createQueryBuilder('d');

        $qb
            ->select(
                '
                DATE_FORMAT(d.data, \'%Y-%m\') as data,
                d.rodzaj
                ',
            )
            ->andWhere('d.owner = :owner')
            ->setParameter('owner', $owner)
            ->andWhere('d.status = :active')
            ->setParameter('active', 'active')
            ->groupBy('data')
            ->orderBy('data', 'DESC')
        ;
        
        dump($qb->getQuery()->getResult()); //pokazuje tablice w obiekcie

        return $qb->getQuery()->getResult();
    }



    public function findByData($data)
    {
        $qb = $this->createQueryBuilder('d');

        $qb
            ->select(
                'd'    
            )
            ->andWhere('d.data LIKE :data')
            ->setParameter('data', $data)
            // ->andWhere('d.status = :active')
            // ->setParameter('active', 'active')
            // ->andWhere('data = :data')
            // ->setParameter('data', $data)
            // ->groupBy('data')
            // ->orderBy('data', 'DESC')
        ;
        
        #dump($qb->getQuery()->getResult()); //pokazuje tablice w obiekcie

        return $qb->getQuery()->getResult();
    }

    public function findBySearch(?string $query, $user)
    {
        $qb = $this->createQueryBuilder('d');

        //trzeba zmodyfikować zapytanie 12:37 na filmiku
        $qb
            ->where(
                $qb->expr()->andX(
                    $qb->expr()->orX(
                        $qb->expr()->like('d.data', ':query'),
                        $qb->expr()->like('d.kwota', ':query'),
                        $qb->expr()->like('d.faktura', ':query'),
                        $qb->expr()->like('d.rodzaj', ':query'),
                        $qb->expr()->like('d.uwagi', ':query'),  
                    ),
                    $qb->expr()->eq('d.status', ':status'),
                    $qb->expr()->eq('d.owner', ':owner'),
                ),
            )
            ->setParameter('query', '%' . $query . '%')
            ->setParameter('status', 'active')
            ->setParameter('owner', $user)
            ->orderBy('d.data', 'DESC')
        ;

        //dump($qb->getQuery()->getResult()); //pokazuje tablice w obiekcie

        return $qb->getQuery()->getResult();
    }

    public function findByDataMies(?string $query, $user)
    {
        $qb = $this->createQueryBuilder('d');


        $qb
            ->where(
                $qb->expr()->andX(
                    $qb->expr()->orX(
                        $qb->expr()->like('d.data', ':query'),  
                    ),
                    $qb->expr()->eq('d.status', ':status'),
                    $qb->expr()->eq('d.owner', ':owner'),
                ),
            )
            ->setParameter('query', $query . '%')
            ->setParameter('status', 'active')
            ->setParameter('owner', $user)
            ->orderBy('d.data', 'ASC')
        ;

        //dump($qb->getQuery()->getResult()); //pokazuje tablice w obiekcie

        return $qb->getQuery()->getResult();
    }

    // zapytanie dotyczące kosztów i przychodów dla daty rrrr-mm, wystęþuje w route dokumenty/dane/miesiąc/YYYY-mm
    public function findByDataMiesRodzaj(?string $query, $user)
    {
        $qb = $this->createQueryBuilder('d');


        $qb
            ->select(
                    'd.rodzaj',
                    'SUM(d.kwota)',
                )
            ->where(
                $qb->expr()->andX(
                    $qb->expr()->orX(
                        $qb->expr()->like('d.data', ':query'),  
                    ),
                    $qb->expr()->eq('d.status', ':status'),
                    $qb->expr()->eq('d.owner', ':owner'),
                ),
            )
            ->setParameter('query', $query . '%')
            ->setParameter('status', 'active')
            ->setParameter('owner', $user)
            ->groupBy('d.rodzaj')

        ;

        #dump($qb->getQuery()->getResult()); //pokazuje tablice w obiekcie

        return $qb->getQuery()->getResult();
    }

        // zapytanie dotyczące kosztów i przychodów dla daty rrrr-mm, wystęþuje w route dokumenty/dane/miesiąc/YYYY-mm
        public function findByDataMiesSuma(?string $query, $user)
        {
            $qb = $this->createQueryBuilder('d');
    
    
            $qb
                ->select(

                        'SUM(d.kwota)',
                    )
                ->where(
                    $qb->expr()->andX(
                        $qb->expr()->orX(
                            $qb->expr()->like('d.data', ':query'),  
                        ),
                        $qb->expr()->eq('d.status', ':status'),
                        $qb->expr()->eq('d.owner', ':owner'),
                    ),
                )
                ->setParameter('query', $query . '%')
                ->setParameter('status', 'active')
                ->setParameter('owner', $user)
    
            ;
    
            #dump($qb->getQuery()->getResult()); //pokazuje tablice w obiekcie
    
            return $qb->getQuery()->getResult();
        }

}