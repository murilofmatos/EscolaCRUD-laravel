<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;

Route::get('/', function () {
    return view('welcome');
});

// GET     /alunos
// POST    /alunos
// GET     /alunos/create
// GET     /alunos/{id}
// PUT     /alunos/{id}
// DELETE  /alunos/{id}
// GET     /alunos/{id}/edit
Route::resource('alunos', AlunosController::class);
