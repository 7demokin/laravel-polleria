<?php

use App\Http\Controllers\PublicController;
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

Route::get("/", [PublicController::class, 'index'])->name("home");
Route::get("/nosotros", [PublicController::class, 'about'])->name("about");
Route::get("/carta", [PublicController::class, 'menu'])->name("menu");
Route::get("/promociones", [PublicController::class, 'promotions'])->name("promotions");
