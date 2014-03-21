<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/Stage')) {
            // Salut
            if ($pathinfo === '/Stage/saluta') {
                return array (  '_controller' => 'webStudent\\StageBundle\\Controller\\StageController::indexAction',  '_route' => 'Salut',);
            }

            // Consulter
            if ($pathinfo === '/Stage/Consulter') {
                return array (  '_controller' => 'webStudent\\StageBundle\\Controller\\StageController::ConsulterAction',  '_route' => 'Consulter',);
            }

            // Modifier
            if ($pathinfo === '/Stage/Modifier') {
                return array (  '_controller' => 'webStudent\\StageBundle\\Controller\\StageController::ModifierAction',  '_route' => 'Modifier',);
            }

        }

        // SalutEverybody
        if ($pathinfo === '/affichSalut') {
            return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::indexAction',  '_route' => 'SalutEverybody',);
        }

        // webStudent_etudiant_homepage
        if (0 === strpos($pathinfo, '/salut') && preg_match('#^/salut/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'webStudent_etudiant_homepage')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/Etudiant')) {
            // consulter2
            if ($pathinfo === '/Etudiant/consulter') {
                return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulter2Action',  '_route' => 'consulter2',);
            }

            // modifier2
            if (0 === strpos($pathinfo, '/Etudiant/modifier') && preg_match('#^/Etudiant/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier2')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::modifier2Action',));
            }

            // Test
            if ($pathinfo === '/Etudiant/test') {
                return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::TestAction',  '_route' => 'Test',);
            }

            if (0 === strpos($pathinfo, '/Etudiant/ajouter')) {
                // AjouterEtudiant
                if ($pathinfo === '/Etudiant/ajouter') {
                    return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::ajouterAction',  '_route' => 'AjouterEtudiant',);
                }

                // AjouterSection
                if ($pathinfo === '/Etudiant/ajouterSection') {
                    return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::ajouterSectionAction',  '_route' => 'AjouterSection',);
                }

            }

            if (0 === strpos($pathinfo, '/Etudiant/consulter')) {
                // consulterSectionAction
                if (0 === strpos($pathinfo, '/Etudiant/consulterSection') && preg_match('#^/Etudiant/consulterSection/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'consulterSectionAction')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterSectionAction',));
                }

                if (0 === strpos($pathinfo, '/Etudiant/consulterEtudiant')) {
                    // consulterEtudiantAction
                    if (preg_match('#^/Etudiant/consulterEtudiant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'consulterEtudiantAction')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterEtudiantAction',));
                    }

                    // consulterEtudiant2Action
                    if (0 === strpos($pathinfo, '/Etudiant/consulterEtudiant2') && preg_match('#^/Etudiant/consulterEtudiant2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'consulterEtudiant2Action')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterEtudiant2Action',));
                    }

                }

            }

            // listeAction
            if (rtrim($pathinfo, '/') === '/Etudiant/Liste') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'listeAction');
                }

                return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::listeAction',  '_route' => 'listeAction',);
            }

            if (0 === strpos($pathinfo, '/Etudiant/consulter')) {
                // consulterStageAction
                if (0 === strpos($pathinfo, '/Etudiant/consulterStage') && preg_match('#^/Etudiant/consulterStage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'consulterStageAction')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterStageAction',));
                }

                // ListeStageAction
                if (rtrim($pathinfo, '/') === '/Etudiant/consulterListeStage') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ListeStageAction');
                    }

                    return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::listeStageAction',  '_route' => 'ListeStageAction',);
                }

                // consulterEntrepriseAction
                if (0 === strpos($pathinfo, '/Etudiant/consulterEntreprise') && preg_match('#^/Etudiant/consulterEntreprise/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'consulterEntrepriseAction')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterEntrepriseAction',));
                }

                // ListeEntrepriseAction
                if (rtrim($pathinfo, '/') === '/Etudiant/consulterListeEntreprise') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ListeEntrepriseAction');
                    }

                    return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::listeEntrepriseAction',  '_route' => 'ListeEntrepriseAction',);
                }

            }

        }

        // test2Action
        if (rtrim($pathinfo, '/') === '/Accueil') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'test2Action');
            }

            return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::test2Action',  '_route' => 'test2Action',);
        }

        // test3Action
        if (rtrim($pathinfo, '/') === '/test3') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'test3Action');
            }

            return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::test3Action',  '_route' => 'test3Action',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
