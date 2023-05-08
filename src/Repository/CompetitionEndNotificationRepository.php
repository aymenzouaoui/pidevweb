<?php

namespace App\Repository;

use App\Entity\CompetitionEndNotification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CompetitionEndNotification>
 *
 * @method CompetitionEndNotification|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompetitionEndNotification|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompetitionEndNotification[]    findAll()
 * @method CompetitionEndNotification[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompetitionEndNotificationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompetitionEndNotification::class);
    }

    public function save(CompetitionEndNotification $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CompetitionEndNotification $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CompetitionEndNotification[] Returns an array of CompetitionEndNotification objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CompetitionEndNotification
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
