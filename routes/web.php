<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'App\Http\Controllers'], function()
{   


    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        // Route::get('/register', 'RegisterController@show')->name('register.show');
        // Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
        /**
         * Home Routes
         */
        Route::get('/', 'HomeController@index')->name('home.index');
        Route::get('/register', 'HomeController@addSpace')->name('register');
        Route::get('/become-host', 'HomeController@becomeHost')->name('become-host');
        Route::get('/about', 'HomeController@about')->name('about');
        Route::get('/contact-us', 'HomeController@contactUs')->name('contact-us');
        Route::get('/terms', 'HomeController@terms')->name('terms');
        Route::get('/help', 'HomeController@help')->name('help');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        Route::get('/home', 'AdminHomeController@index')->name('home.index');
         /**
         * Amenities Routes
         */
        Route::get('/amenities', 'AmenityController@show')->name('amenities.show');
        Route::post('/amenities', 'AmenityController@store')->name('amenitiesSave');
        Route::post('/amenities-update', 'AmenityController@update')->name('amenitiesUpdate');
        Route::any('/amenities-delete/{id}', 'AmenityController@destroy')->name('amenitiesDelete');





    });
});