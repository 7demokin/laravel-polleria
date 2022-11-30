<?php

use App\Http\Controllers\LoginController;
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
Route::get("/galeria", [PublicController::class, 'gallery'])->name("gallery");
Route::get("/contacto", [PublicController::class, 'contact'])->name("contact");
Route::get("/producto/{id}", [PublicController::class, 'product'])->name("product")->where('id', '[1-9][0-9]*');
Route::get("/carrito", [PublicController::class, 'cart'])->name("cart");


Route::get("/logout", [LoginController::class, 'logout'])->name("logout");

Route::name('api.')->group(function () {
    Route::post("/addCartItem", [PublicController::class, 'addCartItem'])->name("addCartItem");
    Route::get("/getCart", [PublicController::class, 'getCart'])->name("getCart");
    Route::post("/register", [LoginController::class, 'register'])->name("register");
    Route::post("/login", [LoginController::class, 'login'])->name("login");
});
