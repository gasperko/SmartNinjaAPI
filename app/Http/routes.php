<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function () use ($app)
{
    return $app->welcome();
});

$app->group(array('prefix' => '/api/CMW'), function () use ($app)
{
    //  Cars
    $app->get('cars', array('uses' => 'App\Http\Controllers\CarsController@index'));
    $app->get('cars/{id}', array('uses' => 'App\Http\Controllers\CarsController@show'));

    //  Timeslots
    $app->get('timeslots', array('uses' => 'App\Http\Controllers\TimeslotsController@index'));
    $app->get('timeslots/{id}', array('uses' => 'App\Http\Controllers\TimeslotsController@show'));

    //  Car reservation
    $app->post('reservations', array('uses' => 'App\Http\Controllers\ReservationsController@store'));
});


