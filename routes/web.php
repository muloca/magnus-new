<?php

use App\Http\Controllers\{
    UsersController, 
    IndexController,
};
use App\Models\User;
use Illuminate\Support\Facades\Route;

//Rotas de Usuários
Route::delete('/users/{id}/delete', [UsersController::class, 'deleteUser'])->name('users.deleteUser');
Route::put('/users/{id}', [UsersController::class, 'updateUser'])->name('users.updateUser');
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
Route::post('/users/store', [UsersController::class, 'storeUser'])->name('user.store');
Route::get('/users/{id}/show', [UsersController::class, 'show'])->name('users.show'); //Sempre colocar em ordem sem parametro

//Rotas Index
Route::get('/home', [IndexController::class, 'index'])->name('home.index');


Route::get('/', function () {
    return view('welcome');
});
