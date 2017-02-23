<?php

use Illuminate\Routing\Router;

Admin::registerHelpersRoutes();

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('/project','ProjectController@index');
    $router->post('/project','ProjectController@store');
    $router->get('/project/create','ProjectController@create');
    $router->get('/project/{id}/edit','ProjectController@edit');
    $router->put('/project/{id}/','ProjectController@update');
    $router->delete('/project/{id}','ProjectController@destroy');
});
