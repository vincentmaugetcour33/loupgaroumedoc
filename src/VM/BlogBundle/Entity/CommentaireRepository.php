<?php

namespace VM\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CommentaireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentaireRepository extends EntityRepository
{
    /**
     * Get commentairesacceptes
     * @return Commentaire
     */
    public function getCommentairesAcceptes($page,$commentaires_per_page,$tri)
    {
        
     $query_builder = $this->createQueryBuilder('c');
     return $query_builder->leftJoin('c.livre', 'l')
                   ->addSelect('l')->where( $query_builder->expr()->like('l.titre', ':titre'))
                   ->setParameter('titre', 'Loup-Garou, le monstre du Médoc')
                   //->andwhere($query_builder->expr()->like('c.statut', ":statut"))
                   //->setParameter('statut', 'accepte')
                   ->orderBy('c.date', $tri)
                   ->setFirstResult(($page * $commentaires_per_page) - $commentaires_per_page)
                   ->setMaxResults($commentaires_per_page)
                   ->getQuery()->getResult();
     }  

}
