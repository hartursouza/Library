<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Página inicial
|--------------------------------------------------------------------------
*/
Route::view('/', 'welcome')->name('home');

/*
|--------------------------------------------------------------------------
| Contato (Público)
|--------------------------------------------------------------------------
*/
Route::prefix('contato')
    ->name('contato.')
    ->controller(ContactController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'send')->name('send');
    });

/*
|--------------------------------------------------------------------------
| Dashboard (Usuário autenticado)
|--------------------------------------------------------------------------
*/
Route::prefix('dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard.')
    ->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('dashboard');

        Route::prefix('profile')
            ->name('profile.')
            ->group(function () {
                Route::get('/', [ProfileController::class, 'edit'])->name('edit');
                Route::patch('/', [ProfileController::class, 'update'])->name('update');
                Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
            });
    });

/*
|--------------------------------------------------------------------------
| Área Administrativa (Somente Admin)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin.')
    ->group(function () {
        Route::view('/', 'admin.dashboard')->name('dashboard');
    });

/*
|--------------------------------------------------------------------------
| Rotas de Autenticação
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
