<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;

/**
 * ProjectRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectRepository extends EntityRepository
{

    public function getProjectForExternal($id){

        $qb = $this->createQueryBuilder('p')
            ->select('p', 'rip', 'rs', 'c')
            ->leftJoin("p.revisionsInProject", "rip")
            ->leftJoin("rip.revisionState", "rs")
            ->leftJoin("rs.component", "c")
            ->where("p.id = '".$id."'");

        $q = $qb->getQuery();

        return $q->getResult();
    }

    public function getProjectForExternalAsArray($id){

        $qb = $this->createQueryBuilder('p')
            ->select('p', 'rip', 'rs', 'c', 'pv', 'ripv', 'rsv', 'cv')
            ->leftJoin("p.revisionsInProject", "rip")
            ->leftJoin("rip.revisionState", "rs")
            ->leftJoin("rs.component", "c")
            ->leftJoin("p.values", "pv")
            ->leftJoin("c.values", "cv")
            ->leftJoin("rs.values", "rsv")
            ->leftJoin("rip.values", "ripv")
            ->where("p.id = '".$id."'");

        $q = $qb->getQuery();

        return $q->getArrayResult();
    }

}
