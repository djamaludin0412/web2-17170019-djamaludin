<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



Route::prefix('supplier')->group(function () {
    Route::get('/', 'supplierController@index')->name('supplierController.index');
    Route::get('/create', 'supplierController@create')->name('supplierController.create');
    Route::post('/', 'supplierController@store')->name('supplierController.store');
    Route::get('/edit/{id}', 'supplierController@edit')->name('supplierController.edit');

    Route::put('/{id}', 'supplierController@update')->name('supplierController.update');
    
    Route::put('/delete', 'supplierController@delete')->name('supplierController.delete');
    Route::delete('/{id}', 'supplierController@destroy')->name('supplierController.destroy');
    Route::get('/show/{id}', 'supplierController@show')->name('supplierController.show');
});

