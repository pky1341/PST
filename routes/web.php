<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PSTController;

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

Route::get("/",[PSTController::class,"first"])->name('first');
Route::post('/store',[PSTController::class,'store'])->name('store');
