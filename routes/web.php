<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [\App\Http\Controllers\AddController::class, 'index'])->name('index');
Route::post('/add', [\App\Http\Controllers\AddController::class, 'add'])->name('addTodo');
Route::delete('/delete/{id}', [\App\Http\Controllers\AddController::class, 'destroy'])->name('deleteEmployee');
Route::put('/update/{id}', [\App\Http\Controllers\AddController::class, 'update'])->name('updateEmployee');
Route::get('/search/{name}', [\App\Http\Controllers\AddController::class, 'search'])->name('searchInfo');
