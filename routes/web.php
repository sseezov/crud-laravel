<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::get('/create', [UserController::class, 'create'])->name('users.create');
Route::post('/', [UserController::class, 'add'])->name('users.add');
Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/{user}/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/{user}/delete', [UserController::class, 'delete'])->name('users.delete');
