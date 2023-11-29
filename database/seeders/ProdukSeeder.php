<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $produk = Produk::create([
            'nama_produks' => 'Garang Gesing Panna Cotta',
            'kode_produks' => 'GGPC',
            'kategori_produks' => 1,
            'harga_produks' => 33000,
            'stok_produks' => 100,
            'deskripsi_produks' => 'Layered Caranggesing and rich coconut panna cota, crumble',
            'gambar_produks' => '1.jpg',
        ]);
    }
}
