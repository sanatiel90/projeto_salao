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

Auth::routes();

Route::get('/home', 'HomeController@index');

//rotas relacionadas a cliente
Route::group(['prefix'=>'client'], function(){

	Route::get('/new','ClientController@newClient');

});

//rotas relacionadas a funcionario
Route::group(['prefix' => 'employee'], function(){

	Route::get('/new', 'UserController@newUser');

});


//rotas relacionadas a servicos
Route::group(['prefix' => 'service'], function(){

	Route::get('/new', 'ServiceController@newService');

});


//rotas relacionadas a comandas
Route::group(['prefix' => 'command'], function(){

	Route::get('/new', 'CommandController@newCommand');

});









