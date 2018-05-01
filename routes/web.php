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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    //News route
    $router->get('news', 'NewsController@index');
    $router->get('news/{ND_ID}', 'NewsController@show');
    $router->post('news', 'NewsController@store');
    $router->put('news/{id}', 'NewsController@update');
    $router->delete('news/{id}', 'NewsController@delete');
 
});