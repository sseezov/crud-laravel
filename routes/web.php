<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;
use App\Models\User;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::get('/create', [UserController::class, 'create'])->name('users.create');
Route::post('/', [UserController::class, 'add'])->name('users.add');
Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/{user}/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/{user}/delete', [UserController::class, 'delete'])->name('users.delete');

Route::get('/', function () {
    return Inertia::render('index', [
        'user'=> User::all(),
    ]
    );
});

Route::get('/create', function () {
    return Inertia::render('create');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
