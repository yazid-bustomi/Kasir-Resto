<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\ProdukKategory;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        return view('manager.dashboard-manager');
    }
    public function dataClients()
    {
        return view('manager.data-clients');
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
            'produk' => $produk,
            'kategori' => $kategori,
        ]);
    }

    public function reports()
    {
        return view('manager.reports');
    }
}
