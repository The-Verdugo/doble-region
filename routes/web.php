<?php

use App\Http\Controllers\IndexController;
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

Route::get('/',IndexController::class) -> name('Inicio');
Route::view('/albumes', 'albumes')-> name('Albumes');
Route::view('/biografia', 'biografia')-> name('Biografia');
Route::view('/contacto', 'contacto')-> name('Contacto');