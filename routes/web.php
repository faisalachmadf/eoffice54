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
    return view('welcome');
});

// AREA ADMIN
Route::group(['prefix' => 'adminpanel'], function() {
    
    Route::get('/dashboard', function () {
    		return view('admin.dashboard');
    })->name('dashboard');

     Route::get('/login', function () {
    		return view('admin.login');
    })->name('login');


    Route::group(['prefix' => 'agenda'], function() {
		    Route::get('/', function () {
		    		return view('admin.agenda.index');
		    })->name('agenda.index');
    });

    Route::group(['prefix' => 'profil'], function() {
		    Route::get('/', function () {
		    		return view('admin.profil.index');
		    })->name('profil.index');
    });


});




