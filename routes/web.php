<?php

use App\Http\Controllers\ManagerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Auth\UserControllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Requests;

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
// route manager 
Route::get('/manager', [ManagerController::class, 'index'])->name('manager.index');
Route::get('/manager/data-cashiers', [ManagerController::class, 'dataCashiers'])->name('data.cashiers');
Route::get('/manager/data-products', [ProdukController::class, 'index'])->name('data.products');
//rating
Route::get('/rating', [RatingController::class, 'index'])->name('rating.index');
Route::get('/rating/{rating}/delete', [RatingController::class, 'destroy'])->name('deleteRating');
// CRUD user
Route::get('/manager/data-clients', [ClientController::class, 'index'])->name('data.clients');
Route::get('/client/formAdd', [ClientController::class, 'create'])->name('form');
Route::post('/client/store', [ClientController::class, 'store'])->name('add-clients');
Route::get('/client/{clients}/edit', [ClientController::class, 'edit'])->name('formEdit-clients');
Route::post('/client/{clients}/update', [ClientController::class, 'update'])->name('update-clients');
Route::get('/manager/delete/{clients}', [ClientController::class, 'destroy'])->name('delete-clients');
// CRUD produk
Route::get('/manager/formAdd', [ProdukController::class, 'create'])->name('formTambah-produk');
Route::post('/manager/store', [ProdukController::class, 'store'])->name('produk-store');
Route::get('/manager/{produk}/edit', [ProdukController::class, 'edit'])->name('formEdit-produk');
Route::post('/manager/{produk}/update', [ProdukController::class, 'update'])->name('update-produk');
Route::delete('/manager/delete_produk/{produk}', [ProdukController::class, 'destroy'])->name('delete-produk');


Route::get('/', function () {
    return view('home');
});

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/Home-user', [UserController::class, 'home'])->name('Home-user');
Route::post('/add_cart', [App\Http\Controllers\Auth\UserController::class, 'add_cart'])->name('add_cart');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/order', [OrderController::class, 'index'])->name('order.index');
