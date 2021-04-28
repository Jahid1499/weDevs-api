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
$router->get('order-details/{id}', ['middleware'=>'auth', 'uses'=>'OrderController@index']);
$router->post('order-store', ['middleware'=>'auth', 'uses'=>'OrderController@store']);
$router->delete('order-delete/{id}', ['middleware'=>'auth', 'uses'=>'OrderController@destroy']);


// Product
$router->get('product', ['middleware'=>'auth', 'uses'=>'ProductController@index']);
$router->get('product/{id}', ['middleware'=>'auth', 'uses'=>'ProductController@getProduct']);


//user
$router->get('user-login', ['middleware'=>'auth', 'uses'=>'UserController@login']);

