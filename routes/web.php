<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('welcome');
});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add-task',[TaskController::class,'create']);
Route::post('/create-task',[TaskController::class,'store'])->name('post.create');

Route::get('/index',[TaskController::class,'getPost']);

Route::resource('tasks',TaskController::class);

Route::get('/edit/{id}',[TaskController::class,'edit']);
Route::post('/update/{id}',[TaskController::class, 'update'])->name('post.update');


Route::get('/add-role',[RoleController::class,'addRole']);
Route::post('/create-role',[RoleController::class,'createRole'])->name('role.create');

Route::get('/role',[RoleController::class,'getRole']);


Route::get('/upload',[UploadController::class,'UploadForm']);
Route::post('/upload',[UploadController::class,'UploadFile'])->name('upload.uploadfile');
