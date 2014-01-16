<?php

namespace webStudent\EtudiantBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EntrepriseRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EtudiantRepository extends EntityRepository
{

	public function rechercherEtudiant($pNom)
{
      // Création de la requête
      $queryBuilder = $this->createQueryBuilder('e')
                                 ->where('e.nom like :leNom')
                                 ->setParameter('leNom', $pNom)
                                 ->orderBy('e.nom', 'ASC') ;
    // On récupère la Query à partir du QueryBuilder
    $query = $queryBuilder->getQuery();
    // On récupère les résultats à partir de la Query
    $resultats = $query->getResult();
    // On retourne ces résultats
    return $resultats;
}
}
