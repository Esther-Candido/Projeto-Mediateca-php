<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LoginController;

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

//-----------------------------------

/**
 * Zona para guest - Users não autenticados
 */
Route::get('/', function () {
    return view('landing');
})->name('landing');
Route::get('/login',[LoginController::class,'showLogin'])->name('login');
Route::post('/login',[LoginController::class,'login']);

/**
 * Só users autenticados
 */
Route::post('/logout',[LoginController::class,'logout'])->name('logout')->middleware('auth');



/**
 * Sona de Administradores
 * /admin/xxxx
 * nome das rotas admin sejam admin.xxx
 */
Route::middleware('role:admin')->group(function (){
    Route::prefix('/admin')->group(function () {
        Route::name('admin.')->group(function () {
            //Dashboard
            Route::get('/home', [DashboardController::class, 'admin'])->name('home');

            //Obras

            //Autores
            Route::resource('autores', AutorController::class)->parameters(['autores' => 'autor']);

        });
    });
});


/**
 * Zona clientes
 */
Route::middleware('role:cliente')->group(function (){
    Route::prefix('/cliente')->group(function () {
        Route::name('cliente.')->group(function () {
            //Dashboard
            Route::get('/home', [DashboardController::class, 'cliente'])->name('home');

            //Obras

            //Autores
            Route::resource('autores', AutorController::class)
                ->parameters(['autores' => 'autor'])
                ->only('show', 'index');
        });
    });
});





