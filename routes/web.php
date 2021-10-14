<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\Motorbike\MotorbikeController as MotosCtrl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController as UserCtrl;

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

/* Por defecto
Route::get('/', function () {
    return view('welcome');
});
*/

//Este método ::view sirve para devolver contenido estático; es decir, sin pasar por un controlador que acceda a la bbdd, sólo una vista.
Route::view('/','pages.home')->name('home');

Route::resource('motos', MotosCtrl::class);

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

