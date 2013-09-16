<?php

namespace VM\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of DocumentRepository
 *
 * @author Vincent
 */
class DocumentRepository extends EntityRepository
{
   /**
     * Get trouvedernierdocument
     * @return Document
     */
    public function getTrouveDernierDocument()
    {
     $query_builder = $this->createQueryBuilder('d');
     return $query_builder->leftJoin('d.livre', 'l')
                   ->addSelect('l')->where( $query_builder->expr()->like('l.titre', ':titre'))
                   ->setParameter('titre', 'Loup-Garou, le monstre du Médoc')
                   ->setMaxResults(1)
                   ->getQuery()->getSingleResult();
   } 
}

?>
