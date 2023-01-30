<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\TodoListController;
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

Route::resource('/todo-lists', TodoListController::class);

Route::get('/', TestController::class);

/*
Route::get('/todo-lists/', [TodoListController::class, 'index']);
Route::get('/todo-lists/{todo-list}', [TodoListController::class, 'show']);
Route::post('/todo-lists/create', [TodoListController::class, 'store'])->name('todo-lists.store');
Route::match(['PUT', 'PATCH'],'/todo-lists/{todo-list}', [TodoListController::class, 'update'])->name('todo-lists.update');
Route::delete('/todo-lists/{todo-list}', [TodoListController::class, 'delete'])->name('todo-lists.delete');
*/
