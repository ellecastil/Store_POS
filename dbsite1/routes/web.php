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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/users', 'UserController@index');       // These are the controllers for Cashier login Page       
$router->post('/users', 'UserController@addUser');          
$router->get('/users/{id}', 'UserController@show');          
$router->put('/users/{id}', 'UserController@update');       
$router->patch('/users/{id}', 'UserController@update');      
$router->delete('/users/{id}', 'UserController@delete');    

$router->get('cashier_login', 'UserController@showlogin');      // Login Page of Cashier
$router->post('validate', 'UserController@result');     

$router->get('/users2', 'User2Controller@index');      // These are the controllers for Admin Login Page       
$router->post('/users2', 'User2Controller@addUser');          
$router->get('/users2/{id}', 'User2Controller@show');          
$router->put('/users2/{id}', 'User2Controller@update');       
$router->patch('/users2/{id}', 'User2Controller@update');       
$router->delete('/users2/{id}', 'User2Controller@delete');   

$router->get('admin', 'User2Controller@showlogin');     // Login Page of Admin
$router->post('validate', 'User2Controller@result');

$router->get('/category', 'CategoryController@index');          // These are the controllers for Category page
$router->post('/category', 'CategoryController@addCategory');
$router->get('/category/{id}', 'CategoryController@show'); 
$router->put('/category/{id}', 'CategoryController@update');
$router->patch('/category/{id}', 'CategoryController@update');
$router->delete('/category/{id}', 'CategoryController@delete');

$router->get('/categorypage', 'CategoryController@showView');   // View for category page
    
$router->get('/product', 'ProductController@index');    // These are the controllers for Product page
$router->post('/product', 'ProductController@addProduct');
$router->get('/product/{id}', 'ProductController@show'); 
$router->put('/product/{id}', 'ProductController@update');
$router->patch('/product/{id}', 'ProductController@update');
$router->delete('/product/{id}', 'ProductController@delete');

$router->get('/productpage', 'ProductController@showPage');  // View for Product Page