<?php

namespace VM\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * LivreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LivreRepository extends EntityRepository
{
 public function findmonstremedoc($titre)
 {
     $querybuilder = $this->_em->createQueryBuilder()
                          ->select('l')->from($this->_entityName,'l')
                          ->where('l.titre = :titre')
                          ->setParameter('titre',$titre);
     
     $query = $querybuilder->getQuery();
     $resultat = $query->getSingleResult();
     return $resultat;
             
     
 }
    
}
