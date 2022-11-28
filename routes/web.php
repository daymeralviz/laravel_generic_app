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


use App\Http\Controllers\PortfolioController; 


Route::view('/','home',['nombre' =>'Daymer'])->name('home');
Route::view('/about','about')->name('about');
//Route::view('/portfolio','portfolio',compact('portfolio'))->name('portfolio');


Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::view('/contact','contact')->name('contact');

/*

Route::get('/', function () {
    $nombre = "Dywwe";
    //return view('home')->with(['nombre' => $nombre]);
   /return view('home', compact('nombre'));
})->name('home');
*/

Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {
    return "prueba de saludos:" . $nombre;
});

//Route::resource('proyectos',PortfolioController::class);



