<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AvisosController;
use App\Http\Controllers\ParceiroController;
use App\Http\Controllers\PontosColetaController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;

/*
|--------------------------------------------------------------------------
| Rotas Públicas (Visualização)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeControler::class, 'index'])->name('index');
Route::get('/sobre-nos', [SobreNosController::class, 'index'])->name('sobre-nos');
Route::get('/pontos-coleta', [PontosColetaController::class ,'index'])->name('pontos-coleta');
Route::get('/avisos', [AvisosController::class, 'index'])->name('avisos');
Route::get('/parceiros', [ParceiroController::class, 'index'])->name('parceiros');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');


/*
|--------------------------------------------------------------------------
| Rotas Administrativas (Ações do ADM)
|--------------------------------------------------------------------------
|
*/
Route::prefix('app')->name('app.')->group(function() {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('/sobre-nos', [SobreNosController::class, 'store'])->name('sobre-nos.store');

    Route::post('/pontos-coleta', [PontosColetaController::class, 'store'])->name('pontos-coleta.store');
    Route::delete('/pontos-coleta/{id}', [PontosColetaController::class, 'destroy'])->name('pontos-coleta.delete');
   
    Route::post('/avisos', [AvisosController::class, 'store'])->name('avisos.store');
    Route::delete('/avisos/{id}', [AvisosController::class, 'destroy'])->name('avisos.delete');
    
    Route::post('/parceiros', [ParceiroController::class,'store'])->name('parceiros.store');
    Route::delete('/parceiros/{id}', [ParceiroController::class, 'destroy'])->name('parceiros.delete');

});
