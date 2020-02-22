<?php

namespace AppBundle\Repository;

/**
 * CarRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CarRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAllCarBy(string $model) {
        return $this->createQueryBuilder('car')
                    ->where('car.model', ':model')
                    ->setParameter('model', $model)
                    ->getQuery()
                    ->getResult();
    }
}
