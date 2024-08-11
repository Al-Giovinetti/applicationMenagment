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

Route::get('/',[PageController::class,'index'])->name('applications.index');

Route::get('/applications/create',[PageController::class,'create'])->name('applications.create');

Route::post('/applications',[PageController::class,'store'])->name('applications.store');

Route::get('/applications/trashed',[PageController::class,'softDelete'])->name('applications.softDelete');

Route::get('/applications/{application}',[PageController::class,'show'])->name('applications.show');

Route::get('applocatiion/{id}/edit',[PageController::class,'edit'])->name('applications.edit');

Route::put('applications/{id}/update', [PageController::class,'update'])->name('applications.update');

Route::delete('apploications/{id}/',[PageController::class,'destroy'])->name('applications.destroy');

Route::post('applications/{id}/respawn',[PageController::class,'respawn'])->name('applications.respawn');
