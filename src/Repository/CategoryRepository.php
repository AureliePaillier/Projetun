<?php


namespace App\Repository;

use Doctrine\ORM\EntityRepository;
use \DateTime;

class CategoryRepository extends EntityRepository
{
    public function findCategoriesWithJobs()
    {
        return $this->createQueryBuilder('c')
            ->join('c.jobs', 'j')
            ->where('j.expiresAt > :date')
            ->setParameter('date', new DateTime())
            ->getQuery()
            ->getResult();
    }
}