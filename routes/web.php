<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('alunos', AlunosController::class);
