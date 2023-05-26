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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/nuevochat', [App\Http\Controllers\HomeController::class, 'index1'])->name('nuevochat');

Auth::routes();

Route::get('/modificarchat', [App\Http\Controllers\HomeController::class, 'index2'])->name('modificarchat');

Route::get('/miPerfil', [App\Http\Controllers\HomeController::class, 'index3'])->name('miPerfil');

Route::get('/pagoExitoso', [App\Http\Controllers\HomeController::class, 'index4'])->name('pagoExitoso');

Route::get('/pagoFallido', [App\Http\Controllers\HomeController::class, 'index5'])->name('pagoFallido');

Route::get('/subscripcion', [App\Http\Controllers\HomeController::class, 'index6'])->name('subscripcion');

Route::get('/nuevaSubscripcion', [App\Http\Controllers\HomeController::class, 'newsub'])->name('nuevaSubscripcion');

Route::get('/misSubscripciones', [App\Http\Controllers\HomeController::class, 'index7'])->name('misSubscripciones');

Route::get('/renovarSubscripcion/{id}', [App\Http\Controllers\HomeController::class, 'index8'])->name('renovarSubscripcion');

Route::get('/renovarExitoso/{id}', [App\Http\Controllers\HomeController::class, 'index9'])->name('renovarExitoso');

Route::get('/panelAdmin',[App\Http\Controllers\AdminController::class,'index'])
->middleware('auth.admin')
->name('admin.index');

Route::get('/editarUsuario',[App\Http\Controllers\AdminController::class,'index1'])
->middleware('auth.admin')
->name('admin.editarUsuario');

Route::get('/editarChatBot',[App\Http\Controllers\AdminController::class,'index2'])
->middleware('auth.admin')
->name('admin.editarChatBot');

Route::get('/actualizarUsuario/{id}',[App\Http\Controllers\AdminController::class,'edit'])
->middleware('auth.admin')
->name('admin.actualizarUsuario');

Route::put('/update/{id}',[App\Http\Controllers\AdminController::class,'update'])
->middleware('auth.admin')
->name('admin.update');

Route::put('/updated/{id}',[App\Http\Controllers\AdminController::class,'updated'])
->middleware('auth.admin')
->name('admin.updated');

Route::get('/actualizarSubscripcion/{id}',[App\Http\Controllers\AdminController::class,'subscripcion'])
->middleware('auth.admin')
->name('admin.actualizarSubscripcion');


