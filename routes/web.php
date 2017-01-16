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
    $app->get('people', 'PersonController@index');
    $app->get('people/{id}', 'PersonController@getPerson');
    $app->get('people/{id}/addresses', 'PersonController@getPersonAddress');
    
    $app->post('people', 'PersonController@createPerson');
    $app->put('people/{id}', 'PersonController@updatePerson');
    $app->delete('people/{id}', 'PersonController@deletePerson');
    
    $app->get('addresses', 'AddressController@index');
    $app->get('addresses/{id}', 'AddressController@getAddress');
    $app->get('addresses/{id}/people', 'AddressController@getAddressPerson');
    
    $app->post('addresses', 'AddressController@createAddress');
    
    //test APIs
    
    $app->get('wifes/{id}', 'CoupleController@getWife');
});