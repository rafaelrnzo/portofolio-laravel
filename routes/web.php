<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FavController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;



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



Route::get("/",[IndexController::class, "index"]);
Route::get("/fav", [FavController::class, "index"]);
Route::get("/about", [AboutController::class, "index"]);
Route::get("/admin", [AdminController::class, "index"]);
Route::get("/login", [LoginController::class, "index"]);
