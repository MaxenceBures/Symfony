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
        'Salut' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\StageBundle\\Controller\\StageController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Stage/saluta',    ),  ),  4 =>   array (  ),),
        'Consulter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\StageBundle\\Controller\\StageController::ConsulterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Stage/Consulter',    ),  ),  4 =>   array (  ),),
        'Modifier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\StageBundle\\Controller\\StageController::ModifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Stage/Modifier',    ),  ),  4 =>   array (  ),),
        'SalutEverybody' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affichSalut',    ),  ),  4 =>   array (  ),),
        'webStudent_etudiant_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/salut',    ),  ),  4 =>   array (  ),),
        'consulter2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulter2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Etudiant/consulter',    ),  ),  4 =>   array (  ),),
        'modifier2' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::modifier2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Etudiant/modifier',    ),  ),  4 =>   array (  ),),
        'Test' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::TestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Etudiant/test',    ),  ),  4 =>   array (  ),),
        'AjouterEtudiant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Etudiant/ajouter',    ),  ),  4 =>   array (  ),),
        'AjouterSection' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::ajouterSectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Etudiant/ajouterSection',    ),  ),  4 =>   array (  ),),
        'consulterSectionAction' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterSectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Etudiant/consulterSection',    ),  ),  4 =>   array (  ),),
        'consulterEtudiantAction' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterEtudiantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Etudiant/consulterEtudiant',    ),  ),  4 =>   array (  ),),
        'consulterEtudiant2Action' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterEtudiant2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Etudiant/consulterEtudiant2',    ),  ),  4 =>   array (  ),),
        'listeAction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::listeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Etudiant/Liste/',    ),  ),  4 =>   array (  ),),
        'consulterStageAction' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterStageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Etudiant/consulterStage',    ),  ),  4 =>   array (  ),),
        'ListeStageAction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::listeStageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Etudiant/consulterListeStage/',    ),  ),  4 =>   array (  ),),
        'consulterEntrepriseAction' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterEntrepriseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Etudiant/consulterEntreprise',    ),  ),  4 =>   array (  ),),
        'ListeEntrepriseAction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::listeEntrepriseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Etudiant/consulterListeEntreprise/',    ),  ),  4 =>   array (  ),),
        'test2Action' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::test2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Accueil/',    ),  ),  4 =>   array (  ),),
        'test3Action' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::test3Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test3/',    ),  ),  4 =>   array (  ),),
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
