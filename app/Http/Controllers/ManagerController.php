<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Produk;
use App\Models\ProdukKategory;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        $users = User::all();
        $orders = Order::all();
        $ratings = Rating::all();
        return view('manager.dashboard-manager', compact('produks', 'users', 'orders', 'ratings'));
    }
    public function dataClients()
    {
        $usres = User::all();
        return view('manager.data-clients', compact('users'));
    }
    public function dataCashiers()
    {
        return view('manager.data-cashiers');
    }

    public function dataProducts()
    {
        $produk = Produk::all();
        $kategori = ProdukKategory::all();

        return view('manager.data-products', [
            'produks' => $produk,
            'kategori' => $kategori,
        ]);
    }

    public function reports()
    {
        return view('manager.reports');
    }
}
