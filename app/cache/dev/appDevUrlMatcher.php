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

        // entidades_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'entidades_homepage');
            }

            return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'entidades_homepage',);
        }

        // pdf
        if (0 === strpos($pathinfo, '/pdf') && preg_match('#^/pdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pdf')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\DefaultController::pdfAction',));
        }

        if (0 === strpos($pathinfo, '/grafica-')) {
            // grafica_tipo_proyectos
            if ($pathinfo === '/grafica-tipo-proyecto') {
                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\DefaultController::graficaTipoProyectoAction',  '_route' => 'grafica_tipo_proyectos',);
            }

            // grafica_vista_aspectos
            if ($pathinfo === '/grafica-vista-aspectos') {
                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\DefaultController::graficaVistaAspectosAction',  '_route' => 'grafica_vista_aspectos',);
            }

        }

        // acercade
        if ($pathinfo === '/acercade') {
            return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\DefaultController::acercadeAction',  '_route' => 'acercade',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/proyecto')) {
            // proyecto
            if (rtrim($pathinfo, '/') === '/proyecto') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'proyecto');
                }

                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\ProyectoController::indexAction',  '_route' => 'proyecto',);
            }

            // proyecto_show
            if (preg_match('#^/proyecto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyecto_show')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\ProyectoController::showAction',));
            }

            // proyecto_new
            if ($pathinfo === '/proyecto/new') {
                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\ProyectoController::newAction',  '_route' => 'proyecto_new',);
            }

            // proyecto_create
            if ($pathinfo === '/proyecto/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_proyecto_create;
                }

                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\ProyectoController::createAction',  '_route' => 'proyecto_create',);
            }
            not_proyecto_create:

            // proyecto_edit
            if (preg_match('#^/proyecto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyecto_edit')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\ProyectoController::editAction',));
            }

            // proyecto_update
            if (preg_match('#^/proyecto/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_proyecto_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyecto_update')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\ProyectoController::updateAction',));
            }
            not_proyecto_update:

            // proyecto_delete
            if (preg_match('#^/proyecto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_proyecto_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyecto_delete')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\ProyectoController::deleteAction',));
            }
            not_proyecto_delete:

        }

        if (0 === strpos($pathinfo, '/rtfarquitectura')) {
            // rtfarquitectura
            if (rtrim($pathinfo, '/') === '/rtfarquitectura') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rtfarquitectura');
                }

                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\RtfArquitecturaController::indexAction',  '_route' => 'rtfarquitectura',);
            }

            // rtfarquitectura_show
            if (preg_match('#^/rtfarquitectura/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rtfarquitectura_show')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\RtfArquitecturaController::showAction',));
            }

            // rtfarquitectura_new
            if ($pathinfo === '/rtfarquitectura/new') {
                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\RtfArquitecturaController::newAction',  '_route' => 'rtfarquitectura_new',);
            }

            // rtfarquitectura_create
            if ($pathinfo === '/rtfarquitectura/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rtfarquitectura_create;
                }

                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\RtfArquitecturaController::createAction',  '_route' => 'rtfarquitectura_create',);
            }
            not_rtfarquitectura_create:

            // rtfarquitectura_edit
            if (preg_match('#^/rtfarquitectura/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rtfarquitectura_edit')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\RtfArquitecturaController::editAction',));
            }

            // rtfarquitectura_update
            if (preg_match('#^/rtfarquitectura/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_rtfarquitectura_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rtfarquitectura_update')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\RtfArquitecturaController::updateAction',));
            }
            not_rtfarquitectura_update:

            // rtfarquitectura_delete
            if (preg_match('#^/rtfarquitectura/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_rtfarquitectura_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rtfarquitectura_delete')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\RtfArquitecturaController::deleteAction',));
            }
            not_rtfarquitectura_delete:

        }

        if (0 === strpos($pathinfo, '/noconformidad')) {
            // noconformidad
            if (rtrim($pathinfo, '/') === '/noconformidad') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'noconformidad');
                }

                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\NoConformidadController::indexAction',  '_route' => 'noconformidad',);
            }

            // noconformidad_show
            if (preg_match('#^/noconformidad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noconformidad_show')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\NoConformidadController::showAction',));
            }

            // noconformidad_new
            if ($pathinfo === '/noconformidad/new') {
                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\NoConformidadController::newAction',  '_route' => 'noconformidad_new',);
            }

            // noconformidad_create
            if ($pathinfo === '/noconformidad/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_noconformidad_create;
                }

                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\NoConformidadController::createAction',  '_route' => 'noconformidad_create',);
            }
            not_noconformidad_create:

            // noconformidad_edit
            if (preg_match('#^/noconformidad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noconformidad_edit')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\NoConformidadController::editAction',));
            }

            // noconformidad_update
            if (preg_match('#^/noconformidad/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_noconformidad_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noconformidad_update')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\NoConformidadController::updateAction',));
            }
            not_noconformidad_update:

            // noconformidad_delete
            if (preg_match('#^/noconformidad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_noconformidad_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noconformidad_delete')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\NoConformidadController::deleteAction',));
            }
            not_noconformidad_delete:

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario');
                }

                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario',);
            }

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\UsuarioController::showAction',));
            }

            // usuario_new
            if ($pathinfo === '/usuario/new') {
                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }

            // usuario_create
            if ($pathinfo === '/usuario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuario_create;
                }

                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
            }
            not_usuario_create:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\UsuarioController::editAction',));
            }

            // usuario_update
            if (preg_match('#^/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\UsuarioController::updateAction',));
            }
            not_usuario_update:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_usuario_delete:

        }

        if (0 === strpos($pathinfo, '/expedientearquitectura')) {
            // expedientearquitectura
            if (rtrim($pathinfo, '/') === '/expedientearquitectura') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'expedientearquitectura');
                }

                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\ExpedienteArquitecturaController::indexAction',  '_route' => 'expedientearquitectura',);
            }

            // expedientearquitectura_show
            if (preg_match('#^/expedientearquitectura/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expedientearquitectura_show')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\ExpedienteArquitecturaController::showAction',));
            }

            // expedientearquitectura_new
            if ($pathinfo === '/expedientearquitectura/new') {
                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\ExpedienteArquitecturaController::newAction',  '_route' => 'expedientearquitectura_new',);
            }

            // expedientearquitectura_create
            if ($pathinfo === '/expedientearquitectura/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_expedientearquitectura_create;
                }

                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\ExpedienteArquitecturaController::createAction',  '_route' => 'expedientearquitectura_create',);
            }
            not_expedientearquitectura_create:

            // expedientearquitectura_edit
            if (preg_match('#^/expedientearquitectura/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expedientearquitectura_edit')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\ExpedienteArquitecturaController::editAction',));
            }

            // expedientearquitectura_update
            if (preg_match('#^/expedientearquitectura/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_expedientearquitectura_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expedientearquitectura_update')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\ExpedienteArquitecturaController::updateAction',));
            }
            not_expedientearquitectura_update:

            // expedientearquitectura_delete
            if (preg_match('#^/expedientearquitectura/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_expedientearquitectura_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expedientearquitectura_delete')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\ExpedienteArquitecturaController::deleteAction',));
            }
            not_expedientearquitectura_delete:

        }

        if (0 === strpos($pathinfo, '/informenc')) {
            // informenc
            if (rtrim($pathinfo, '/') === '/informenc') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'informenc');
                }

                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\InformeNcController::indexAction',  '_route' => 'informenc',);
            }

            // informenc_show
            if (preg_match('#^/informenc/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'informenc_show')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\InformeNcController::showAction',));
            }

            // informenc_new
            if ($pathinfo === '/informenc/new') {
                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\InformeNcController::newAction',  '_route' => 'informenc_new',);
            }

            // informenc_create
            if ($pathinfo === '/informenc/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_informenc_create;
                }

                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\InformeNcController::createAction',  '_route' => 'informenc_create',);
            }
            not_informenc_create:

            // informenc_edit
            if (preg_match('#^/informenc/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'informenc_edit')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\InformeNcController::editAction',));
            }

            // informenc_update
            if (preg_match('#^/informenc/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_informenc_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'informenc_update')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\InformeNcController::updateAction',));
            }
            not_informenc_update:

            // informenc_delete
            if (preg_match('#^/informenc/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_informenc_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'informenc_delete')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\InformeNcController::deleteAction',));
            }
            not_informenc_delete:

        }

        if (0 === strpos($pathinfo, '/expedientearquitectura')) {
            // evalDocument
            if (preg_match('#^/expedientearquitectura/(?P<idexped>[^/]++)/documentoarquitectura/(?P<id>[^/]++)/eval$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evalDocument')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\DocumentoArquitecturaController::evalDocumentAction',));
            }

            // evalDocumentSave
            if (preg_match('#^/expedientearquitectura/(?P<idexped>[^/]++)/documentoarquitectura/(?P<id>[^/]++)/save$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evalDocumentSave')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\DocumentoArquitecturaController::evalDocumentSaveAction',));
            }

            // documentoarquitectura
            if (preg_match('#^/expedientearquitectura/(?P<idexped>[^/]++)/documentoarquitectura/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'documentoarquitectura');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentoarquitectura')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\DocumentoArquitecturaController::indexAction',));
            }

            // documentoarquitectura_show
            if (preg_match('#^/expedientearquitectura/(?P<idexped>[^/]++)/documentoarquitectura/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentoarquitectura_show')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\DocumentoArquitecturaController::showAction',));
            }

            // documentoarquitectura_new
            if (preg_match('#^/expedientearquitectura/(?P<idexped>[^/]++)/documentoarquitectura/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentoarquitectura_new')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\DocumentoArquitecturaController::newAction',));
            }

            // documentoarquitectura_create
            if (preg_match('#^/expedientearquitectura/(?P<idexped>[^/]++)/documentoarquitectura/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_documentoarquitectura_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentoarquitectura_create')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\DocumentoArquitecturaController::createAction',));
            }
            not_documentoarquitectura_create:

            // documentoarquitectura_edit
            if (preg_match('#^/expedientearquitectura/(?P<idexped>[^/]++)/documentoarquitectura/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentoarquitectura_edit')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\DocumentoArquitecturaController::editAction',));
            }

            // documentoarquitectura_update
            if (preg_match('#^/expedientearquitectura/(?P<idexped>[^/]++)/documentoarquitectura/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_documentoarquitectura_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentoarquitectura_update')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\DocumentoArquitecturaController::updateAction',));
            }
            not_documentoarquitectura_update:

            // documentoarquitectura_evaluar
            if (preg_match('#^/expedientearquitectura/(?P<idexped>[^/]++)/documentoarquitectura/(?P<id>[^/]++)/evaluar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentoarquitectura_evaluar')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\DocumentoArquitecturaController::evaluacionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/aspectos')) {
            // aspectos
            if (rtrim($pathinfo, '/') === '/aspectos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'aspectos');
                }

                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\AspectosController::indexAction',  '_route' => 'aspectos',);
            }

            // aspectos_show
            if (preg_match('#^/aspectos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aspectos_show')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\AspectosController::showAction',));
            }

            // aspectos_new
            if ($pathinfo === '/aspectos/new') {
                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\AspectosController::newAction',  '_route' => 'aspectos_new',);
            }

            // aspectos_create
            if ($pathinfo === '/aspectos/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_aspectos_create;
                }

                return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\AspectosController::createAction',  '_route' => 'aspectos_create',);
            }
            not_aspectos_create:

            // aspectos_edit
            if (preg_match('#^/aspectos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aspectos_edit')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\AspectosController::editAction',));
            }

            // aspectos_update
            if (preg_match('#^/aspectos/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_aspectos_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aspectos_update')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\AspectosController::updateAction',));
            }
            not_aspectos_update:

            // aspectos_delete
            if (preg_match('#^/aspectos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_aspectos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aspectos_delete')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\AspectosController::deleteAction',));
            }
            not_aspectos_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'HRETA\\EntidadesBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
