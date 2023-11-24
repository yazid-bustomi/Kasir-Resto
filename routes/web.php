<?php

use App\Http\Controllers\ManagerController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;
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
// route manager 
Route::get('/manager', [ManagerController::class, 'index'])->name('manager.index');
Route::get('/manager/data-clients', [ManagerController::class, 'dataClients'])->name('data.clients');
Route::get('/manager/data-cashiers', [ManagerController::class, 'dataCashiers'])->name('data-cashiers');
Route::get('/manager/data-products', [ManagerController::class, 'dataProducts'])->name('data-products');
Route::get('/manager/reports', [ManagerController::class, 'reports'])->name('reports');


Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/order', [OrderController::class, 'index'])->name('order.index');
