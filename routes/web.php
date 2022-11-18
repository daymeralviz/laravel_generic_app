<?php

use Illuminate\Support\Facades\Route;

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
    return "Hola desde el inicio";
    //return view('welcome');
});

Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {
    return "prueba de saludos:" . $nombre;
});

Route::get('contactame', function () {
    return "Seccion de contactos";
})->name('contactos');


Route::get('/',function(){
    echo "<a href='".route('contactos')."'>Contacto 1</a><br>";
    echo "<a href='".route('contactos')."'>Contacto 2</a><br>";
    echo "<a href='".route('contactos')."'>Contacto 3</a><br>";
    echo "<a href='".route('contactos')."'>Contacto 4</a><br>";
    echo "<a href='".route('contactos')."'>Contacto 5</a><br>";
});
