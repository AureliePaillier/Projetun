<?php

namespace App\Repository;

use App\Entity\Category;
use Doctrine\ORM\EntityRepository;
use \DateTime;

class JobRepository extends EntityRepository
{
    public function findActive()
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.expiresAt > :date')
            ->setParameter('date', new DateTime())
            ->getQuery()
            ->getResult();
    }

    public function findActiveByCategory(Category $category)
    {
        return $this->createQueryBuilder('j')
            ->where('j.category = :category')
            ->andWhere('j.expiresAt > :date')
            ->setParameter('category', $category)
            ->setParameter('date', new DateTime())
            ->getQuery()
            ->getResult();
    }
}