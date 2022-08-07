<?php

namespace App\Repository;

use App\Entity\Contant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Contant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contant[]    findAll()
 * @method Contant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contant::class);
    }

    // /**
    //  * @return Contant[] Returns an array of Contant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Contant
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
