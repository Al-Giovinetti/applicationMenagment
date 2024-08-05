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

Route::get('/',[PageController::class,'goToIndexPage'])->name('applications.index');

Route::get('/new-application',[PageController::class,'goToCreatePage'])->name('applications.create');

Route::get('/deleted-list',[PageController::class,'goToSoftDeletePage'])->name('applications.softDelete');

