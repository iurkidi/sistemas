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
        $context = $this->context;
        $request = $this->request;

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

        if (0 === strpos($pathinfo, '/software')) {
            // software
            if (rtrim($pathinfo, '/') === '/software') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'software');
                }

                return array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\softwareController::indexAction',  '_route' => 'software',);
            }

            // software_show
            if (preg_match('#^/software/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'software_show')), array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\softwareController::showAction',));
            }

            // software_new
            if ($pathinfo === '/software/new') {
                return array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\softwareController::newAction',  '_route' => 'software_new',);
            }

            // software_create
            if ($pathinfo === '/software/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_software_create;
                }

                return array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\softwareController::createAction',  '_route' => 'software_create',);
            }
            not_software_create:

            // software_edit
            if (preg_match('#^/software/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'software_edit')), array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\softwareController::editAction',));
            }

            // software_update
            if (preg_match('#^/software/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_software_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'software_update')), array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\softwareController::updateAction',));
            }
            not_software_update:

            // software_delete
            if (preg_match('#^/software/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_software_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'software_delete')), array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\softwareController::deleteAction',));
            }
            not_software_delete:

            // buscSW
            if ($pathinfo === '/software/buscSW') {
                return array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\softwareController::buscarSWAction',  '_route' => 'buscSW',);
            }

            // respBuscSW
            if ($pathinfo === '/software/respBuscSW') {
                return array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\softwareController::respBuscSWAction',  '_route' => 'respBuscSW',);
            }

        }

        if (0 === strpos($pathinfo, '/maqvirtual')) {
            // maqvirtual
            if (rtrim($pathinfo, '/') === '/maqvirtual') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'maqvirtual');
                }

                return array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\maqvirtualController::indexAction',  '_route' => 'maqvirtual',);
            }

            // maqvirtual_show
            if (preg_match('#^/maqvirtual/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maqvirtual_show')), array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\maqvirtualController::showAction',));
            }

            // maqvirtual_new
            if ($pathinfo === '/maqvirtual/new') {
                return array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\maqvirtualController::newAction',  '_route' => 'maqvirtual_new',);
            }

            // maqvirtual_create
            if ($pathinfo === '/maqvirtual/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_maqvirtual_create;
                }

                return array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\maqvirtualController::createAction',  '_route' => 'maqvirtual_create',);
            }
            not_maqvirtual_create:

            // maqvirtual_edit
            if (preg_match('#^/maqvirtual/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maqvirtual_edit')), array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\maqvirtualController::editAction',));
            }

            // maqvirtual_update
            if (preg_match('#^/maqvirtual/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_maqvirtual_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maqvirtual_update')), array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\maqvirtualController::updateAction',));
            }
            not_maqvirtual_update:

            // maqvirtual_delete
            if (preg_match('#^/maqvirtual/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_maqvirtual_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maqvirtual_delete')), array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\maqvirtualController::deleteAction',));
            }
            not_maqvirtual_delete:

        }

        if (0 === strpos($pathinfo, '/hardware')) {
            // hardware
            if (rtrim($pathinfo, '/') === '/hardware') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hardware');
                }

                return array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\hardwareController::indexAction',  '_route' => 'hardware',);
            }

            // hardware_show
            if (preg_match('#^/hardware/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hardware_show')), array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\hardwareController::showAction',));
            }

            // hardware_new
            if ($pathinfo === '/hardware/new') {
                return array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\hardwareController::newAction',  '_route' => 'hardware_new',);
            }

            // hardware_create
            if ($pathinfo === '/hardware/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_hardware_create;
                }

                return array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\hardwareController::createAction',  '_route' => 'hardware_create',);
            }
            not_hardware_create:

            // hardware_edit
            if (preg_match('#^/hardware/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hardware_edit')), array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\hardwareController::editAction',));
            }

            // hardware_update
            if (preg_match('#^/hardware/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_hardware_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hardware_update')), array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\hardwareController::updateAction',));
            }
            not_hardware_update:

            // hardware_delete
            if (preg_match('#^/hardware/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_hardware_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hardware_delete')), array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\hardwareController::deleteAction',));
            }
            not_hardware_delete:

            // respBuscarHW
            if ($pathinfo === '/hardware/respBuscarHW') {
                return array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\hardwareController::respBuscarHWAction',  '_route' => 'respBuscarHW',);
            }

        }

        // uni_sistemas_homepage
        if ($pathinfo === '/sistemas') {
            return array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\DefaultController::indexAction',  '_route' => 'uni_sistemas_homepage',);
        }

        if (0 === strpos($pathinfo, '/link')) {
            // linkCrear
            if (rtrim($pathinfo, '/') === '/linkCrear/conSeguridad') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'linkCrear');
                }

                return array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\DefaultController::indexCrearAction',  '_route' => 'linkCrear',);
            }

            // linkHardware
            if ($pathinfo === '/linkHardware') {
                return array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\hardwareController::buscarHWAction',  '_route' => 'linkHardware',);
            }

            // linkSoftware
            if ($pathinfo === '/linkSoftware') {
                return array (  '_controller' => 'uni\\bundle\\sistemasBundle\\Controller\\softwareController::buscarSWAction',  '_route' => 'linkSoftware',);
            }

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

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
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
