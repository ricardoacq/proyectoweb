<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//HOME
Route::get('/', function (){return view('principal');});
Route::get('/principal', function (){return view('welcome');});


Route::get('/home/{nombre}/{edad}', 'ejemplocontroller@index');

//CONSULTAS 
Route::get('/usuarios','ejemplocontroller@mostrarusuarios');
Route::get('/consultarclientes','ejemplocontroller@consultarclientes');
Route::get('/consultarproyectos','ejemplocontroller@consultarproyectos');

//ELIMINAR 
Route::get('/eliminarusuario/{id}','ejemplocontroller@eliminarusuario');
Route::get('/eliminarproyecto/{id}','ejemplocontroller@eliminarproyecto');
Route::get('/eliminarcliente/{id}','ejemplocontroller@eliminarcliente');
Route::get('/eliminarreq/{id}','ejemplocontroller@eliminarreq');

//EDITAR
Route::get('/editarusuario/{id}','ejemplocontroller@editarusuario');
Route::get('/editarcliente/{id}','ejemplocontroller@editarcliente');
Route::get('/editarproyecto/{id}','ejemplocontroller@editarproyecto');
Route::get('/editarreq/{id}','ejemplocontroller@editarreq');

//AGREGAR NUEVO
Route::get('/registrarusuario','ejemplocontroller@registrarusuario');
Route::get('/registrarcliente','ejemplocontroller@registrarcliente');
Route::get('/registrarproyecto','ejemplocontroller@registrarproyecto');
Route::post('/registrarrequisito','ejemplocontroller@registrarrequisito');

//GUARDAR CAMBIOS
Route::post('/guardarusuario','ejemplocontroller@guardarusuario');
Route::post('/guardarcliente','ejemplocontroller@guardarcliente');
Route::post('/guardarproyecto','ejemplocontroller@guardarproyecto');
Route::post('/guardarrequisito','ejemplocontroller@guardarrequisito');

//ACTUALIZAR DATOS
Route::post('/actualizarusuario/{id}','ejemplocontroller@actualizarusuario');
Route::post('/actualizarcliente/{id}','ejemplocontroller@actualizarcliente');
Route::post('/actualizarproyecto/{id}','ejemplocontroller@actualizarproyecto');
Route::post('/actualizarreq/{id}','ejemplocontroller@actualizarreq');
Route::post('/actualizausuariosproyectos/{id}','ejemplocontroller@actualizausuariosproyectos');
Route::post('/actualizaproyectosrequisitos/{id}','ejemplocontroller@actualizaproyectosrequisitos');

//ASIGNAR A PROYECTOS
Route::get('/asignarusuarios','ejemplocontroller@asignarusuarios');
Route::get('/requisitos','ejemplocontroller@requisitos');

//MOSTRAR POSIBLES PARTICIPES
Route::post('/seleccionarUsuarios','ejemplocontroller@seleccionarUsuarios');
Route::post('/seleccionarrequisitos','ejemplocontroller@seleccionarrequisitos');

//GENERAR PDFS
Route::get('/PDFproyectos/{id}','ejemplocontroller@PDFproyectos');
Route::get('/PDFrequisitos/{id}','ejemplocontroller@PDFrequisitos');

