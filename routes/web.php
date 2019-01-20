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
    return view('index');
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Ajax routes
Route::get('/getPlano/{id}', 'PlanoController@show');
Route::get('/getUser', 'UserController@getUser');
Route::get('/checkCupom', 'CupomController@check');

Route::get('/createPedido', 'PedidoController@create');
