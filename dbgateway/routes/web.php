<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });
$router->get('/login', 'User1Controller@showView');
$router->group(['middleware' =>'client.credentials'], function() use ($router){

    // API routes for Site 1
    // Cashier
    $router->get('/users1', 'User1Controller@getUsers');
    $router->post('/users1', 'User1Controller@addUser');
    $router->get('/users1/{id}', 'User1Controller@show');
    $router->put('/users1/{id}', 'User1Controller@update');
    $router->delete('/users1/{id}', 'User1Controller@delete');
    
});