<?php

namespace App\Repository;

use App\Entity\OperatingSystem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method OperatingSystem|null find($id, $lockMode = null, $lockVersion = null)
 * @method OperatingSystem|null findOneBy(array $criteria, array $orderBy = null)
 * @method OperatingSystem[]    findAll()
 * @method OperatingSystem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OperatingSystemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OperatingSystem::class);
    }

    // /**
    //  * @return OperatingSystem[] Returns an array of OperatingSystem objects
    //  */

    public function findAll()
    {
        return $this->findBy(array(), array('id' => 'DESC'));
    }

    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OperatingSystem
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}