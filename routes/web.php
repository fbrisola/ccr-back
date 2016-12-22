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

$app->get('/', function () use ($app) {
    return $app->version();
});


$app->group(['prefix' => 'api/v1'], function($app) {

    // external APIs
    $app->get('individual/{id}', 'IndividualController@getIndividual');
    $app->get('individual', 'IndividualController@index');
    $app->post('individual', 'IndividualController@createIndividual');
    $app->put('individual/{id}', 'IndividualController@updateIndividual');
    $app->delete('individual/{id}', 'IndividualController@deleteIndividual');



    //test APIs

    $app->get('address', 'AddressController@index');
    $app->post('address', 'AddressController@createAddress');

    $app->get('ind_full/{id}', 'IndividualController@getIndividualFull');
});
