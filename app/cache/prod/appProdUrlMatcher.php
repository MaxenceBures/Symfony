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

        // SalutEverybody
        if ($pathinfo === '/affichSalut') {
            return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::indexAction',  '_route' => 'SalutEverybody',);
        }

        // webStudent_etudiant_homepage
        if (0 === strpos($pathinfo, '/salut') && preg_match('#^/salut/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'webStudent_etudiant_homepage')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/Etudiant')) {
            // consulterEtudiant2Action
            if (0 === strpos($pathinfo, '/Etudiant/consulterEtudiant2') && preg_match('#^/Etudiant/consulterEtudiant2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'consulterEtudiant2Action')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterEtudiant2Action',));
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

        // accueilAction
        if (rtrim($pathinfo, '/') === '/Accueil') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'accueilAction');
            }

            return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::accueilAction',  '_route' => 'accueilAction',);
        }

        // test3Action
        if (rtrim($pathinfo, '/') === '/test3') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'test3Action');
            }

            return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::test3Action',  '_route' => 'test3Action',);
        }

        if (0 === strpos($pathinfo, '/Etudiant')) {
            if (0 === strpos($pathinfo, '/Etudiant/ajouter')) {
                // AjouterStage
                if ($pathinfo === '/Etudiant/ajouterStage') {
                    return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::ajouterStageAction',  '_route' => 'AjouterStage',);
                }

                if (0 === strpos($pathinfo, '/Etudiant/ajouterE')) {
                    // AjouterEntreprise
                    if ($pathinfo === '/Etudiant/ajouterEntreprise') {
                        return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::AjouterEntrepriseAction',  '_route' => 'AjouterEntreprise',);
                    }

                    // AjouterEtudiant2
                    if ($pathinfo === '/Etudiant/ajouterEtudiant') {
                        return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::AjouterEtudiantAction',  '_route' => 'AjouterEtudiant2',);
                    }

                }

            }

            // ModifierEntreprise
            if (0 === strpos($pathinfo, '/Etudiant/modifEntreprise') && preg_match('#^/Etudiant/modifEntreprise/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ModifierEntreprise')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::modifierEntrepriseAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
