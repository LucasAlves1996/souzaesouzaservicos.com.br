<?php

namespace App;

use MyFramework\Init\AppLaunch;

class Route extends AppLaunch
{
    protected function initRoutes()
    {
        $routes['inicio'] = array(
            'path' => '/',
            'controller' => 'RoutesController',
            'action' => 'inicio'
        );

        $routes['sobre'] = array(
            'path' => '/sobre',
            'controller' => 'RoutesController',
            'action' => 'sobre'
        );

        $routes['assessoria'] = array(
            'path' => '/assessoria',
            'controller' => 'RoutesController',
            'action' => 'assessoria'
        );

        $routes['consultoria'] = array(
            'path' => '/consultoria',
            'controller' => 'RoutesController',
            'action' => 'consultoria'
        );

        $routes['contabil'] = array(
            'path' => '/contabil',
            'controller' => 'RoutesController',
            'action' => 'contabil'
        );

        $routes['fiscal'] = array(
            'path' => '/fiscal',
            'controller' => 'RoutesController',
            'action' => 'fiscal'
        );

        $routes['departamento-pessoal'] = array(
            'path' => '/departamento-pessoal',
            'controller' => 'RoutesController',
            'action' => 'departamento_pessoal'
        );

        $routes['outsourcing'] = array(
            'path' => '/outsourcing',
            'controller' => 'RoutesController',
            'action' => 'outsourcing'
        );

        $routes['contato'] = array(
            'path' => '/contato',
            'controller' => 'RoutesController',
            'action' => 'contato'
        );

        $routes['blog'] = array(
            'path' => '/blog',
            'controller' => 'RoutesController',
            'action' => 'blog'
        );

        $routes['login'] = array(
            'path' => '/login',
            'controller' => 'RoutesController',
            'action' => 'login'
        );

        $routes['auth'] = array(
            'path' => '/auth',
            'controller' => 'AuthController',
            'action' => 'auth'
        );

        $routes['logout'] = array(
            'path' => '/logout',
            'controller' => 'RoutesController',
            'action' => 'logout'
        );

        $routes['create-post'] = array(
            'path' => '/create-post',
            'controller' => 'PostController',
            'action' => 'create'
        );

        $routes['slide-show-update'] = array(
            'path' => '/slide-show-update',
            'controller' => 'SlideShowController',
            'action' => 'update'
        );

        $this->setRoutes($routes);
    }
}

?>