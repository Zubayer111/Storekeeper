<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

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

Route::get("/", [DashbordController::class,"index"])->name("home");
Route::get("/add-product", [ProductController::class,"index"])->name("add.product");
Route::post("/add-product", [ProductController::class,"store"])->name("store.product");
Route::get("/view-all-product", [ProductController::class,"viewAll"])->name("view.all.product");
Route::get("/edit-product/{id}", [ProductController::class,"edit"])->name("edit.project");
Route::post("/updete-product/{id}", [ProductController::class,"updete"])->name("updete.project");


Route::get("/order-product", [OrderController::class,"index"])->name("order.project");
Route::get("/confarm-order/{id}", [OrderController::class,"confarm"])->name("order.confarm");

Route::post('/orders-place', [OrderController::class, 'store'])->name('orders.place');
Route::get('/orders-all', [OrderController::class, 'allOrder'])->name('orders.all');



