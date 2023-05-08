<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 *
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    public function save(Reservation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reservation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return Reservation[] Returns an array of Reservation objects
     */
    public function findByUser($value): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.idTrans = :val')
            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Reservation[] Returns an array of Reservation objects
     */
    public function findOrder(): array
    {
        return $this->createQueryBuilder('r')
            ->orderBy('CASE WHEN r.etat = :etat THEN 0 ELSE 1 END', 'DESC')
            ->addOrderBy('r.id', 'ASC')
            ->setParameter('etat', 'En attente')
            ->getQuery()
            ->getResult();
    }
    
        /**
     * @return Reservation[] Returns an array of Reservation objects
     */
    public function findByVehiculeResCon($value): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.idVeh = :vehiculeId')
            ->setParameter('vehiculeId', $value)
            ->andWhere('r.etat = :etat')
            ->setParameter('etat', 'Confirmée')
            // ->orderBy('r.id', 'ASC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }
    
//    public function findOneBySomeField($value): ?Reservation
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
