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
$router->group(['namespace' => 'BaseControllers'], function () use ($router) {
    $router->post('/{entity:promo}', 'BaseController');
    $router->get('/{entity:promo}', 'BaseController');
    $router->get('/{entity:promo}/{id:[0-9]*}', 'BaseController');
    $router->put('/{entity:promo}/{id:[0-9]*}', 'BaseController');
    $router->delete('/{entity:promo}/{id:[0-9]*}', 'BaseController');
});
$router->group(['namespace' => 'OtherControllers'], function () use ($router) {
    $router->post('/promo/{id:[0-9]+}/participant', 'AddParticipantToPromo');
    $router->delete('/promo/{promoId}/participant/{pId}', 'DeleteParticipantFromPromo');
    $router->post('/promo/{id:[0-9]+}/prize', 'AddPrizeToPromo');
    $router->delete('/promo/{promoId}/prize/{pId}', 'DeletePrizeFromPromo');
});
