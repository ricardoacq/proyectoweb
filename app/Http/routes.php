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

Route::get('/', function () {return view('welcome');});

Route::get('/home/{nombre}/{edad}', 'ejemplocontroller@index');

Route::get('/usuarios','ejemplocontroller@mostrarusuarios');

Route::get('/eliminarusuario/{id}','ejemplocontroller@eliminarusuario');

Route::get('/registrarusuario','ejemplocontroller@registrarusuario');

Route::post('/guardarusuario','ejemplocontroller@guardarusuario');

Route::get('/editarusuario/{id}','ejemplocontroller@editarusuario');

Route::post('/actualizarusuario/{id}','ejemplocontroller@actualizarusuario');

Route::get('/asignarusuarios','ejemplocontroller@asignarusuarios');

Route::post('/seleccionarUsuarios','ejemplocontroller@seleccionarUsuarios');

Route::post('/actualizausuariosproyectos/{id}','ejemplocontroller@actualizausuariosproyectos');

Route::get('/PDFproyectos/{id}','ejemplocontroller@PDFproyectos');