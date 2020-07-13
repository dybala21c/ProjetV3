<?php

namespace App\Repository;

use App\Entity\TypeSeance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeSeance|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeSeance|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeSeance[]    findAll()
 * @method TypeSeance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeSeanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeSeance::class);
    }

    // /**
    //  * @return TypeSeance[] Returns an array of TypeSeance objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeSeance
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
