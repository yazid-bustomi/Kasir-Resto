<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use App\Models\ProdukKategory;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::all();
        return view('manager.data-products', ['produks' => $produks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // form tambah produk
        $produk_kategori = ProdukKategory::all();

        return view('manager.form.formTambahproduk', [
            'kategori' => $produk_kategori,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProdukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdukRequest $request)
    {
        // validasi data dari form
        $request->validate([
            'nama_produks' => 'required',
            'kode_produks' => 'required',
            'kategori_produks' => 'required',
            'harga_produks' => 'required|numeric',
            'stok_produks' => 'required|integer',
            'deskripsi_produks' => 'required',
            'gambar_produks' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        // dd($request);

        // upload gambar 
        $gambar = $request->file('gambar_produks');
        $nama_gambar = rand() . '.' . $gambar->getClientOriginalExtension();
        $gambar->storeAs('public/img/uploads', $nama_gambar);

        // simpan ke database
        $produk = new Produk;
        $produk->kategori_produks = $request->kategori_produks;
        $produk->nama_produks = $request->nama_produks;
        $produk->kode_produks = $request->kode_produks;
        $produk->harga_produks = $request->harga_produks;
        $produk->stok_produks = $request->stok_produks;
        $produk->deskripsi_produks = $request->deskripsi_produks;
        $produk->gambar_produks = $nama_gambar;

        $produk->save();


        return redirect()->route('data.products')->with('succes', 'produk berhasil di tambahkan ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdukRequest  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProdukRequest $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
