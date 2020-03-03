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


Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);

Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/passengers',['as'=>'admin.passengers','uses'=>'Admin\PassengerController@index']);
    Route::get('/admin/passengers/adicionar',['as'=>'admin.passengers.adicionar','uses'=>'Admin\PassengerController@adicionar']);
    Route::post('/admin/passengers/salvar',['as'=>'admin.passengers.salvar','uses'=>'Admin\PassengerController@salvar']);
    Route::get('/admin/passengers/editar/{id}',['as'=>'admin.passengers.editar','uses'=>'Admin\PassengerController@editar']);
    //Se não quiser passar na url o id, pode passar dentro do formulário, como em um hidden field
    Route::put('/admin/passengers/atualizar/{id}',['as'=>'admin.passengers.atualizar','uses'=>'Admin\PassengerController@atualizar']);
    Route::get('/admin/passengers/deletar/{id}',['as'=>'admin.passengers.deletar','uses'=>'Admin\PassengerController@deletar']);
});