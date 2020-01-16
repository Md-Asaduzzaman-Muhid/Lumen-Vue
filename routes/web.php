<?php

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

$router->get('/', 'ExampleController@homeGet');
$router->post('/','ExampleController@homePost');

$router->group(['prefix'=>'api'] ,function($router) {

    $router->get('/users','UserController@index');
    $router->post('/users','UserController@store');
    $router->put('/users/{id}','UserController@edit');
    $router->delete('/users/{id}','UserController@delete');

    $router->get('/attendance','AttendanceController@index');

}

);