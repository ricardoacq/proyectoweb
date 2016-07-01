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
Route::get('/', function (){return view('welcome');});

Route::get('/home/{nombre}/{edad}', 'ejemplocontroller@index');

//CONSULTAS 
Route::get('/usuarios','ejemplocontroller@mostrarusuarios');
Route::get('/consultarclientes','ejemplocontroller@consultarclientes');
Route::get('/consultarproyectos','ejemplocontroller@consultarproyectos');

//ELIMINAR O EDITAR
Route::get('/eliminarusuario/{id}','ejemplocontroller@eliminarusuario');
Route::get('/editarusuario/{id}','ejemplocontroller@editarusuario');

//AGREGAR NUEVO
Route::get('/registrarusuario','ejemplocontroller@registrarusuario');

//GUARDAR CAMBIOS
Route::post('/guardarusuario','ejemplocontroller@guardarusuario');

//ACTUALIZAR DATOS
Route::post('/actualizarusuario/{id}','ejemplocontroller@actualizarusuario');
Route::post('/actualizausuariosproyectos/{id}','ejemplocontroller@actualizausuariosproyectos');

//ASIGNAR A PROYECTOS
Route::get('/asignarusuarios','ejemplocontroller@asignarusuarios');

//MOSTRAR POSIBLES PARTICIPES
Route::post('/seleccionarUsuarios','ejemplocontroller@seleccionarUsuarios');

//GENERAR PDFS
Route::get('/PDFproyectos/{id}','ejemplocontroller@PDFproyectos');