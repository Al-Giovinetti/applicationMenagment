<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController as PageController;

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

Route::get('/applications',[PageController::class,'index'])->name('applications.index');

Route::get('/applications/create',[PageController::class,'create'])->name('applications.create');

Route::post('applications',[PageController::class,'store'])->name('applications.store');

Route::get('/applications/softDelete',[PageController::class,'softDelete'])->name('applications.softDelete');

Route::get('/applications/{application}',[PageController::class,'show'])->name('applications.show');

