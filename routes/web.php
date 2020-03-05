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

    Route::get('/admin/airports',['as'=>'admin.airports','uses'=>'Admin\AirportController@index']);
    Route::get('/admin/airports/adicionar',['as'=>'admin.airports.adicionar','uses'=>'Admin\AirportController@adicionar']);
    Route::post('/admin/airports/salvar',['as'=>'admin.airports.salvar','uses'=>'Admin\AirportController@salvar']);
    Route::get('/admin/airports/editar/{id}',['as'=>'admin.airports.editar','uses'=>'Admin\AirportController@editar']);
    Route::put('/admin/airports/atualizar/{id}',['as'=>'admin.airports.atualizar','uses'=>'Admin\AirportController@atualizar']);
    Route::get('/admin/airports/deletar/{id}',['as'=>'admin.airports.deletar','uses'=>'Admin\AirportController@deletar']);

    Route::get('/admin/flights',['as'=>'admin.flights','uses'=>'Admin\FlightController@index']);
    Route::get('/admin/flights/adicionar',['as'=>'admin.flights.adicionar','uses'=>'Admin\FlightController@adicionar']);
    Route::post('/admin/flights/salvar',['as'=>'admin.flights.salvar','uses'=>'Admin\FlightController@salvar']);
    Route::get('/admin/flights/editar/{id}',['as'=>'admin.flights.editar','uses'=>'Admin\FlightController@editar']);
    Route::put('/admin/flights/atualizar/{id}',['as'=>'admin.flights.atualizar','uses'=>'Admin\FlightController@atualizar']);
    Route::get('/admin/flights/deletar/{id}',['as'=>'admin.flights.deletar','uses'=>'Admin\FlightController@deletar']);

    Route::get('/admin/bookings',['as'=>'admin.bookings','uses'=>'Admin\BookingController@index']);
    Route::get('/admin/bookings/adicionar',['as'=>'admin.bookings.adicionar','uses'=>'Admin\BookingController@adicionar']);
    Route::post('/admin/bookings/salvar',['as'=>'admin.bookings.salvar','uses'=>'Admin\BookingController@salvar']);
    Route::get('/admin/bookings/editar/{id}',['as'=>'admin.bookings.editar','uses'=>'Admin\BookingController@editar']);
    Route::put('/admin/bookings/atualizar/{id}',['as'=>'admin.bookings.atualizar','uses'=>'Admin\BookingController@atualizar']);
    Route::get('/admin/bookings/deletar/{id}',['as'=>'admin.bookings.deletar','uses'=>'Admin\BookingController@deletar']);
});