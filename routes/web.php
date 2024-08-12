<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedoresController;
use App\http\Controllers\CategoriasController;
use App\Http\Controllers\Clientes_prodController;
use App\Http\Controllers\Localidades_provController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return "Nos Encontramos en el Raiz";

});

//****************  proveedores *********************
route::get('/proveedores',[ProveedoresController::class, 'index_prov'])->name('proveedor');
route::get('/proveedores/adicion',[ProveedoresController::class, 'adicion'])->name('prov_crea');

route::get('proveedores/modifica',[ProveedoresController::class, 'modifica'])->name('modifiprov');;

route::get('proveedores/borra',[ProveedoresController::class, 'borra'])->name('borraprov');

route::post('/proveedores/creapro',[ProveedoresController::class, 'creapro'])->name('crearproveedor');

route::get('proveedores/{id_prov}',[ProveedoresController::class, 'editar'])->name('editar_prov');




//**************parte de categorias*****************

route::get('/categorias',[CategoriasController::class, 'index_cat'])->name('categorias');

route::get('/categorias/recibe_cat',[CategoriasController::class, 'recibe_cat']);

route::post('/categorias/guardar_datos', [CategoriasController::class, 'guardar_datos'])->name('salva_datos');


//***************************


//parte de clientes


route::get('/clientes', [Clientes_prodController::class, 'index_clie'])->name('clientes');


route::get('/clientes/crea_cli',[Clientes_prodController::class, 'crea_cli'])->name('clien_crea');

route::post('clientes/crearclien',[Clientes_prodController::class, 'crearclien'])->name('adicion_cliente');

route::get('clientes/editar_dat/{id}', [Clientes_prodController::class, 'editar_dat'])->name('clientes_editar');

route::put('clientes/update', [Clientes_prodController::class, 'update'])->name('actualizar_clientes');

route::get('/clientes/eliminacion/{id}', [Clientes_prodController::class, 'eliminacion'])->name('clientes_elimina');


//*********************  localidades  ******************

route::get('/localidades', [Localidades_provController::class, 'index_loc'])->name('localidad');

route::get('localidades/adiciongen', [Localidades_provController::class, 'adiciongen'])->name('adiloca');

route::post('localidades/adicion_loc', [Localidades_provController::class, 'adicion_loc'])->name('adic_loc');


//*******************   **********************************************