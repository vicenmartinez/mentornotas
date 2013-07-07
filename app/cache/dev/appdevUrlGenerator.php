<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'JAMNotasBackendBundle_homepage' => true,
       'jamn_homepage' => true,
       'jamn_conetiqueta' => true,
       'jamn_buscar' => true,
       'jamn_nota' => true,
       'jamn_nueva' => true,
       'jamn_editar' => true,
       'jamn_borrar' => true,
       'jamn_espacio_premium' => true,
       'jamn_rss' => true,
       'jamn_registro' => true,
       'jamn_activar_cuenta' => true,
       'jamn_tarifas' => true,
       'jamn_contratar' => true,
       'jamn_damenotas' => true,
       'JAMN_ORM_crear' => true,
       'JAMN_ORM_recuperar' => true,
       'JAMN_ORM_recuperar_notas' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/welcome',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getJAMNotasBackendBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getjamn_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::indexAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getjamn_conetiquetaRouteInfo()
    {
        return array(array (  0 => 'etiqueta',), array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::indexAction',), array (  'id' => '\\d+',  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'etiqueta',  ),  1 =>   array (    0 => 'text',    1 => '/conetiqueta',  ),));
    }

    private function getjamn_buscarRouteInfo()
    {
        return array(array (), array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::indexAction',  'etiqueta' => 'termino',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/buscar',  ),));
    }

    private function getjamn_notaRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::indexAction',), array (  'id' => '\\d+',  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/nota',  ),));
    }

    private function getjamn_nuevaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::nuevaAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/nueva',  ),));
    }

    private function getjamn_editarRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::editarAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/editar',  ),));
    }

    private function getjamn_borrarRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::borrarAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/borrar',  ),));
    }

    private function getjamn_espacio_premiumRouteInfo()
    {
        return array(array (), array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::espacioPremiumAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/miespacio',  ),));
    }

    private function getjamn_rssRouteInfo()
    {
        return array(array (), array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::rssAction',), array (  '_method' => 'GET',  '_format' => 'xml',), array (  0 =>   array (    0 => 'text',    1 => '/rss',  ),));
    }

    private function getjamn_registroRouteInfo()
    {
        return array(array (), array (  '_controller' => 'JAMNotasFrontendBundle:Login:registro',), array (), array (  0 =>   array (    0 => 'text',    1 => '/registro',  ),));
    }

    private function getjamn_activar_cuentaRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'JAMNotasFrontendBundle:Login:activar',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/activar',  ),));
    }

    private function getjamn_tarifasRouteInfo()
    {
        return array(array (), array (  '_controller' => 'JAMNotasFrontendBundle:Contratos:tarifasPremium',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/tarifas',  ),));
    }

    private function getjamn_contratarRouteInfo()
    {
        return array(array (), array (  '_controller' => 'JAMNotasFrontendBundle:Contratos:contratarPremium',), array (), array (  0 =>   array (    0 => 'text',    1 => '/contratar',  ),));
    }

    private function getjamn_damenotasRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::dameNotasAction',  '_format' => 'json',), array (  '_format' => 'json|xml',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => 'json|xml',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/dameNotas',  ),));
    }

    private function getJAMN_ORM_crearRouteInfo()
    {
        return array(array (), array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\EstudioORMController::crearAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/estudio_orm/crear',  ),));
    }

    private function getJAMN_ORM_recuperarRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\EstudioORMController::recuperarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/estudio_orm/recuperar',  ),));
    }

    private function getJAMN_ORM_recuperar_notasRouteInfo()
    {
        return array(array (), array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\EstudioORMController::recuperarNotasAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/estudio_orm/recuperar_notas',  ),));
    }
}
