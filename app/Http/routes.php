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
    $app->get('cars', array('uses' => 'App\Components\CMW\Http\Controllers\CarsController@index'));
    $app->get('cars/{id}', array('uses' => 'App\Components\CMW\Http\Controllers\CarsController@show'));

    //  Timeslots
    $app->get('timeslots', array('uses' => 'App\Components\CMW\Http\Controllers\TimeslotsController@index'));
    $app->get('timeslots/{id}', array('uses' => 'App\Components\CMW\Http\Controllers\TimeslotsController@show'));

    //  Car reservation
    $app->post('reservations', array('uses' => 'App\Components\CMW\Http\Controllers\ReservationsController@store'));

    //  Documentation
    $app->get('docs', function()
    {
       return view('documentation.cmw.documentation');
    });
});

$app->group(array('prefix' => '/api/eshop'), function () use ($app)
{
    //  Categories
    $app->get('categories', array('uses' => 'App\Components\eshop\Http\Controllers\CategoriesController@index'));
    $app->get('categories/{id}/products', array('uses' => 'App\Components\eshop\Http\Controllers\CategoriesController@getProducts'));

    //  Products
    $app->get('products', array('uses' => 'App\Components\eshop\Http\Controllers\ProductsController@index'));
    $app->get('products/{id}', array('uses' => 'App\Components\eshop\Http\Controllers\ProductsController@show'));

    //  Documentation
    $app->get('docs', function()
    {
        return view('documentation.cmw.documentation');
    });
});


