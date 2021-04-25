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

$router->get('/', function (){
    return "Welcome to weDevs";
});


// Order
$router->get('order-details/{id}', 'OrderController@index');
$router->post('order-store', 'OrderController@store');
$router->delete('order-delete/{id}', 'OrderController@destroy');


// Product
$router->get('product', 'ProductController@index');


//user
$router->post('user-login', 'UserController@login');

