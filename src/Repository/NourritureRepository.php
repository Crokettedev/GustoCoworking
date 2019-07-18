<?php

namespace App\Repository;

use App\Entity\Nourriture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Nourriture|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nourriture|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nourriture[]    findAll()
 * @method Nourriture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NourritureRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Nourriture::class);
    }

    public function findByLabelMenu()
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.label = 1')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findByLabelBoissons()
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.label = 2')
            ->getQuery()
            ->getResult()
            ;
    }

    /*
    public function findOneBySomeField($value): ?Nourriture
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
