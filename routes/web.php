<?php

use App\Http\Controllers\ManagerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\UserController;
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
Route::get('/manager/data-clients', [ManagerController::class, 'dataClients'])->name('data.clients');
Route::get('/manager/data-cashiers', [ManagerController::class, 'dataCashiers'])->name('data.cashiers');
Route::get('/manager/data-products', [ProdukController::class, 'index'])->name('data.products');
Route::get('/manager/reports', [ManagerController::class, 'reports'])->name('reports');
Route::get('/rating', [RatingController::class, 'index'])->name('rating.index');

// CRUD produk
Route::get('/manager/formAdd', [ProdukController::class, 'create'])->name('formTambah-produk');
Route::post('/manager/store', [ProdukController::class, 'store'])->name('store');

Route::get('/', function () {
    return view('home');
});

Route::get('/user',[App\Http\Controllers\Auth\UserController::class, 'index'])->name('user');
Route::post('/add_cart',[App\Http\Controllers\Auth\UserController::class, 'add_cart'])->name('add_cart');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/order', [OrderController::class, 'index'])->name('order.index');
