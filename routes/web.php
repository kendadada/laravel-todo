<?php

use App\Http\Controllers\TodoController;
use App\Livewire\TodoCreate;
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
// AdminLTE
Route::get('/admin/login', function () {
    return view('/auth/login');
})
    ->name('admin.login');
//AdminLTE home
Route::get('/admin/home', function () {
    return view('/admin/home');
})->name('admin.home');

Route::get('/admin/view', function () {
    return view('/admin/view');
})->name('admin.view');

Route::get('/admin/create', function () {
    return view('/admin/create');
})->name('admin.create');

Route::get('/admin/create', TodoCreate::class)->name('todos.create');


Route::get('/livewire/counter', function () {
    return view('/livewire/counter');
})->name('livewire.counter');

// --- end AdminLTE ---

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin/view', function () {
//     return view('welcome');
// });

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
