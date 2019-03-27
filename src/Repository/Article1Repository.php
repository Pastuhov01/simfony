<?php

namespace App\Repository;

use App\Entity\Article1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Article1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article1[]    findAll()
 * @method Article1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Article1Repository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Article1::class);
    }

    // /**
    //  * @return Article1[] Returns an array of Article1 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Article1
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
