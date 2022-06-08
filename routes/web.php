<?php

use App\Http\Controllers\{
    UsersController, 
    IndexController,
};
use App\Models\User;
use Illuminate\Support\Facades\Route;

//Rotas de Usuários
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('users/create', [UsersController::class, 'create'])->name('users.create');
Route::post('users/', [UsersController::class, 'storeUser'])->name('user.store');
Route::get('/users/{id}', [UsersController::class, 'show'])->name('users.show'); //Sempre colocar em ordem sem parametro

//Rotas Index
Route::get('/home', [IndexController::class, 'index'])->name('home.index');


Route::get('/', function () {
    return view('welcome');
});


