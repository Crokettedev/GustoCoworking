<?php

namespace App\Repository;

use App\Entity\SallePriver;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SallePriver|null find($id, $lockMode = null, $lockVersion = null)
 * @method SallePriver|null findOneBy(array $criteria, array $orderBy = null)
 * @method SallePriver[]    findAll()
 * @method SallePriver[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SallePriverRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SallePriver::class);
    }

    /**
      * @return SallePriver[] Returns an array of SallePriver objects
     */

    public function findBySalle6()
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.places = 6')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findBySalle4()
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.places = 4')
            ->getQuery()
            ->getResult()
            ;
    }


    /*
    public function findOneBySomeField($value): ?SallePriver
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
