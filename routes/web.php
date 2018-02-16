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

//Route::get('/', function () {
//    return view('welcome');
//});
Auth::routes();
Route::get('/', 'AnaliseController@index')->name('analise.index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/analise', 'AnaliseController@index')->name('analise.index');
Route::post('/analise', 'AnaliseController@calcular')->name('analise.calcular');
Route::get('/analise/mpall', 'AnaliseController@mpall')->name('analise.mpall');
Route::get('/rawmaterials/overprice', 'RawmaterialsController@overprice')->name('rawmaterials.overprice');
Route::post('/rawmaterials/overprice', 'RawmaterialsController@overprice')->name('rawmaterials.overprice');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/users', 'UsersController');
    Route::resource('/criterias', 'CriteriasController');
    Route::resource('/dyeings', 'DyeingsController');
    Route::resource('/rawmaterials', 'RawmaterialsController');
    
    Route::resource('/boms', 'BomsController');
    Route::resource('/destinations', 'DestinationsController');
    Route::resource('/knittings', 'KnittingsController');
    Route::resource('/packagings', 'PackagingsController');
});

