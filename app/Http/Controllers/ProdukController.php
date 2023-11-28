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
        return view('manager.data-products');
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

        // Mengelola file gambar_produks
        // $fileName = null;
        // if ($request->hasFile('gambar_produks')) {
        //     $file = $request->file('gambar_produks');
        //     $fileName = time() . '_' . $file->getClientOriginalExtension();
        //     $file->storeAs('public/img/uploads', $fileName);
        // }

        // Validasi data
        // $validatedData = \validator($request->all(), [
        //     'kode_produks' => 'required|string|max:255',
        //     'nama_produks' => 'required|string|max:255',
        //     'kategori_produks' => 'required|string',
        //     'stok_produks' => 'required|string',
        //     'harga_produks' => 'required|string|max:255',
        //     'gambar_produks' => 'image|mimes:png,jpeg,jpg,gif,svg|max:2048',
        //     'deskripsi_produks' => 'required|string|max:255',
        // ])->validate();
        // Simpan ke database
        // $produk = new Produk([
        //     'kode_produks' => $validatedData['kode_produks'],
        //     'nama_produks' => $validatedData['nama_produks'],
        //     'kategori_produks' => $validatedData['kategori_produks'],
        //     'stok_produks' => $validatedData['stok_produks'],
        //     'harga_produks' => $validatedData['harga_produks'],
        //     'gambar_produks' => $fileName,
        //     'deskripsi_produks' => $validatedData['deskripsi_produks'],
        // ]);
        // \var_dump($produk);
        // $produk->save();

        // return redirect(route('data.products'))->with('success', 'Produk berhasil ditambahkan');
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
