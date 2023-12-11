<?php

use App\Http\Controllers\TodoController;
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

// home
Route::get('/home', function () {
    return view('index');
});

// 一覧
Route::get('/todo_view-page', [TodoController::class, 'todo_view']);

//作成
Route::post('/create', [TodoController::class, 'create']);
Route::get('/todo_create-page', [TodoController::class, 'todo_create']);

// 更新
Route::get('/todo_update-page/{id}', [TodoController::class, 'todo_update']);
Route::post('/update/{id}', [TodoController::class, 'update'])->name('todo.update');

// 削除
Route::get('/todo_delete-page/{id}', [TodoController::class, 'todo_delete']);
Route::post('/delete/{id}', [TodoController::class, 'delete'])->name('todo.delete');
