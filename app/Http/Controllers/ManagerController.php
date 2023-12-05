<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\ProdukKategory;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        return view('manager.dashboard-manager', [
            'title' => 'Dashboard',
        ]);
    }

    public function dataCashiers()
    {
        return view('manager.data-cashiers', [
            'title' => 'Data Cashier',
        ]);
    }

    public function dataProducts()
    {
        $produk = Produk::all();
        $kategori = ProdukKategory::all();

        return view('manager.data-products', [
            'produks' => $produk,
            'kategori' => $kategori,
            'title' => 'Data Produk'
        ]);
    }
}
