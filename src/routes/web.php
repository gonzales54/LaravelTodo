<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', TodoController::class)->only([
  'index', 'store'
]);

Route::get('/create', [TodoController::class, 'create'])->name('create');

Route::resource('/todos', TodoController::class)->names([
  'show' => 'show',
  'update' => 'update',
  'destroy' => 'destroy'
]);

Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('edit');
