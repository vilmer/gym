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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clientes-index', 'Clientes@index')->name('clientes');
Route::get('/clientes-nuevo', 'Clientes@nuevo')->name('nuevoCliente');
Route::post('/clientes-guardar', 'Clientes@guardar')->name('registrarCliente');
Route::get('/clientes-editar/{id}', 'Clientes@editar')->name('editarCliente');
Route::post('/clientes-actualizar', 'Clientes@actualizar')->name('actualizarCliente');
Route::get('/clientes-eliminar/{id}', 'Clientes@eliminar')->name('eliminarCliente');



// maquinAS

Route::get('/maquinas-index', 'Maquinas@index')->name('maquinas');
Route::get('/maquinas-nuevo', 'Maquinas@nuevo')->name('nuevoMaquina');
Route::post('/maquinas-guardar', 'Maquinas@guardar')->name('registrarMaquina');
Route::get('/maquinas-editar/{id}', 'Maquinas@editar')->name('editarMaquina');
Route::post('/maquinas-actualizar', 'Maquinas@actualizar')->name('actualizarMaquina');
Route::get('/maquinas-eliminar/{id}', 'Maquinas@eliminar')->name('eliminarMaquina');


// productos



Route::get('/productos-index', 'Productos@index')->name('productos');
Route::get('/productos-nuevo', 'Productos@nuevo')->name('nuevoProducto');
Route::post('/productos-guardar', 'Productos@guardar')->name('registrarProducto');
Route::get('/productos-editar/{id}', 'Productos@editar')->name('editarProducto');
Route::post('/productos-actualizar', 'Productos@actualizar')->name('actualizarProducto');
Route::get('/productos-eliminar/{id}', 'Productos@eliminar')->name('eliminarProducto');

// factura
Route::get('/factura-index', 'Facturas@index')->name('facturas');
Route::get('/facturas-nuevo', 'Facturas@nuevo')->name('nuevoFactura');
Route::post('/facturas-finalizar', 'Facturas@finalizar')->name('finalizarFactura');
Route::get('/facturas-imprimir/{id}', 'Facturas@imprimir')->name('imprimirFacturaVenta');



