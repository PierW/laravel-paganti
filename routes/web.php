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
    return view('welcome',
                [
                "nome" => "Pierpaolo",
                "cognome" => "Wurzburger"
                ]);
});

Route::get('home', "MyController@getHome");

Route::get("pagamenti", "PagamentiController@getPagamenti");

Route::get("pagamenti/{id}", "PagamentiController@getPagamento");

Route::get("paganti", "PagantiController@getPaganti");

Route::get("paganti/{id}", "PagantiController@getPagante");
