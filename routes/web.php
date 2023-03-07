<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\TarefaController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //ROTA RESOURCE
    Route::resource('tarefas',TarefaController::class);

    //Log
    Route::get('logs/index',    [LogController::class, 'index'])->name('logs.index');
    Route::get('logs/get_logs', [LogController::class, 'get_logs'])->name('log.get_logs');
});
