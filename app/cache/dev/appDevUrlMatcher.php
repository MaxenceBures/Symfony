<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // web_student_entreprise_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_student_entreprise_homepage')), array (  '_controller' => 'webStudent\\EntrepriseBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/Entreprise')) {
            if (0 === strpos($pathinfo, '/Entreprise/consulter')) {
                // ListeEntreprise
                if (rtrim($pathinfo, '/') === '/Entreprise/consulterListeEntreprise') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ListeEntreprise');
                    }

                    return array (  '_controller' => 'webStudent\\EntrepriseBundle\\Controller\\EntrepriseController::listeEntrepriseAction',  '_route' => 'ListeEntreprise',);
                }

                // ConsulterEntreprise
                if (0 === strpos($pathinfo, '/Entreprise/consulterEntreprise') && preg_match('#^/Entreprise/consulterEntreprise/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ConsulterEntreprise')), array (  '_controller' => 'webStudent\\EntrepriseBundle\\Controller\\EntrepriseController::consulterEntrepriseAction',));
                }

            }

            // AjouterEntreprise
            if ($pathinfo === '/Entreprise/ajouterEntreprise') {
                return array (  '_controller' => 'webStudent\\EntrepriseBundle\\Controller\\EntrepriseController::ajouterEntrepriseAction',  '_route' => 'AjouterEntreprise',);
            }

            // ModifierEntreprise
            if (0 === strpos($pathinfo, '/Entreprise/modifEntreprise') && preg_match('#^/Entreprise/modifEntreprise/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ModifierEntreprise')), array (  '_controller' => 'webStudent\\EntrepriseBundle\\Controller\\EntrepriseController::modifierEntrepriseAction',));
            }

        }

        // web_student_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_student_user_homepage')), array (  '_controller' => 'webStudent\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        // SalutEverybody
        if ($pathinfo === '/affichSalut') {
            return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::indexAction',  '_route' => 'SalutEverybody',);
        }

        // webStudent_etudiant_homepage
        if (0 === strpos($pathinfo, '/salut') && preg_match('#^/salut/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'webStudent_etudiant_homepage')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\DefaultController::indexAction',));
        }

        // accueilAction
        if (rtrim($pathinfo, '/') === '/Accueil') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'accueilAction');
            }

            return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::accueilAction',  '_route' => 'accueilAction',);
        }

        // layoutAction
        if (rtrim($pathinfo, '/') === '/layout') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'layoutAction');
            }

            return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::layoutAction',  '_route' => 'layoutAction',);
        }

        if (0 === strpos($pathinfo, '/Stage')) {
            // AjouterStage
            if ($pathinfo === '/Stage/ajouterStage') {
                return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::ajouterStageAction',  '_route' => 'AjouterStage',);
            }

            // ModifierStage
            if (0 === strpos($pathinfo, '/Stage/modifStage') && preg_match('#^/Stage/modifStage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ModifierStage')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::modifierStageAction',));
            }

            if (0 === strpos($pathinfo, '/Stage/consulter')) {
                // ConsulterStage
                if (0 === strpos($pathinfo, '/Stage/consulterStage') && preg_match('#^/Stage/consulterStage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ConsulterStage')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterStageAction',));
                }

                // ListeStage
                if (rtrim($pathinfo, '/') === '/Stage/consulterListeStage') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ListeStage');
                    }

                    return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::listeStageAction',  '_route' => 'ListeStage',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/Etudiant')) {
            // ListeEtudiant
            if (rtrim($pathinfo, '/') === '/Etudiant/listeEtudiant') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ListeEtudiant');
                }

                return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::listeEtudiantAction',  '_route' => 'ListeEtudiant',);
            }

            // ConsulterEtudiant
            if (0 === strpos($pathinfo, '/Etudiant/consulterEtudiant') && preg_match('#^/Etudiant/consulterEtudiant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ConsulterEtudiant')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterEtudiantAction',));
            }

            // ModifierEtudiant
            if (0 === strpos($pathinfo, '/Etudiant/modifEtudiant') && preg_match('#^/Etudiant/modifEtudiant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ModifierEtudiant')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::modifierEtudiantAction',));
            }

            // AjouterEtudiant
            if ($pathinfo === '/Etudiant/ajouterEtudiant') {
                return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::ajouterEtudiantAction',  '_route' => 'AjouterEtudiant',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/Compte')) {
            // ConsulterCompte
            if (0 === strpos($pathinfo, '/Compte/consulterCompte') && preg_match('#^/Compte/consulterCompte/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ConsulterCompte')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::consulterCompteAction',));
            }

            // ModifierCompte
            if (0 === strpos($pathinfo, '/Compte/modifierCompte') && preg_match('#^/Compte/modifierCompte/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ModifierCompte')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::modifierCompteAction',));
            }

        }

        // ListeActivite
        if (rtrim($pathinfo, '/') === '/Activite/consulterListeActivite') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ListeActivite');
            }

            return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::listeActiviteAction',  '_route' => 'ListeActivite',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
