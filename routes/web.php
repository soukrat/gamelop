<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cridite', 'StarpassController@cridite');

Route::get('/parametre', 'StoreController@parametre');

Route::resource('store','StoreController');

Route::resource('starpass','StarpassController');

Route::post('/valider','StoreController@valider');

//admin route
Route::resource('demande','DemandeController');

Route::get('/addstore','StoreController@addstore');

Route::get('/addnumber','StarpassController@addnumber');

Route::resource('user','UserController');

Route::get('/users/confirmation/{token}', 'Auth\RegisterController@confirmation')->name('confirmation');

Route::resource('autorisation','AutorisationController');

Route::post('/convert','DemandeController@convert');

Route::post('/demande','DemandeController@demande');