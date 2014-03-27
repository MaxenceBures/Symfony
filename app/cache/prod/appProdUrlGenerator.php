<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'SalutEverybody' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affichSalut',    ),  ),  4 =>   array (  ),),
        'webStudent_etudiant_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/salut',    ),  ),  4 =>   array (  ),),
        'consulterEtudiant2Action' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterEtudiant2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Etudiant/consulterEtudiant2',    ),  ),  4 =>   array (  ),),
        'listeAction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::listeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Etudiant/Liste/',    ),  ),  4 =>   array (  ),),
        'consulterStageAction' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterStageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Etudiant/consulterStage',    ),  ),  4 =>   array (  ),),
        'ListeStageAction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::listeStageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Etudiant/consulterListeStage/',    ),  ),  4 =>   array (  ),),
        'consulterEntrepriseAction' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterEntrepriseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Etudiant/consulterEntreprise',    ),  ),  4 =>   array (  ),),
        'ListeEntrepriseAction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::listeEntrepriseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Etudiant/consulterListeEntreprise/',    ),  ),  4 =>   array (  ),),
        'accueilAction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Accueil/',    ),  ),  4 =>   array (  ),),
        'test3Action' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::test3Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test3/',    ),  ),  4 =>   array (  ),),
        'AjouterStage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::ajouterStageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Etudiant/ajouterStage',    ),  ),  4 =>   array (  ),),
        'AjouterEntreprise' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::AjouterEntrepriseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Etudiant/ajouterEntreprise',    ),  ),  4 =>   array (  ),),
        'AjouterEtudiant2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::AjouterEtudiantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Etudiant/ajouterEtudiant',    ),  ),  4 =>   array (  ),),
        'ModifierEntreprise' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::modifierEntrepriseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Etudiant/modifEntreprise',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
