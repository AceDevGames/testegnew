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

Route::get('/produtos','ControladorProduto@index');
Route::get('/produtos/novo','ControladorProduto@create');
Route::post('/produtos','ControladorProduto@store');
Route::get('/produtos/apagar/{id}','ControladorProduto@destroy');



Route::get('/pessoas','ControladorPessoa@index');
Route::get('/pessoas/novo','ControladorPessoa@create');
Route::post('/pessoas','ControladorPessoa@store');
Route::get('/pessoas/apagar/{id}','ControladorPessoa@destroy');



Route::get('/leiloes','ControladorLeilao@index');
Route::get('/leiloes/novo','ControladorLeilao@create');
Route::post('/leiloes','ControladorLeilao@store');
Route::get('/leiloes/apagar/{id}','ControladorLeilao@destroy');


Route::get('/lances','ControladorLances@index');
Route::get('/lances/novo/{id}','ControladorLances@create');
Route::post('/lances/','ControladorLances@store');
Route::get('/lances/listalances/{id}','ControladorLances@listaLances');