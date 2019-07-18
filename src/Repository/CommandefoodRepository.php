<?php

namespace App\Repository;

use App\Entity\Commandefood;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Commandefood|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commandefood|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commandefood[]    findAll()
 * @method Commandefood[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandefoodRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Commandefood::class);
    }

    // /**
    //  * @return Commandefood[] Returns an array of Commandefood objects
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
    public function findOneBySomeField($value): ?Commandefood
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
