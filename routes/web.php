<?php

use Illuminate\Support\Facades\Route;

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
//Route::auth();
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Route::get('/tasks', 'TaskController@index');
Route::get('/tasks', [\App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');
//Route::post('/task', 'TaskController@store');
Route::post('/task', [\App\Http\Controllers\TaskController::class, 'store'])->name('tasks.store');
//Route::delete('/task/{task}', 'TaskController@destroy');
Route::delete('/task/{task}', [\App\Http\Controllers\TaskController::class, 'destroy'])->name('tasks.destroy');
