<?php

namespace Database\Seeders;

use App\Models\ProdukKategory;
use Illuminate\Database\Seeder;
use DB;

class ProdukKategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ProdukKategory::create([
            'id_produk_kategories' => 1,
            'nama_kategori' => 'Dessert',
        ]);

        $data = ProdukKategory::create([
            'id_produk_kategories' => 2,
            'nama_kategori' => 'Drinks',
        ]);

        
        $data = ProdukKategory::create([
                'id_produk_kategories' => 3,
                'nama_kategori' => 'Maincourse',
        ]);
        $data = ProdukKategory::create([
                'id_produk_kategories' => 4,
                'nama_kategori' => 'Snack',
        ]);
            
    }
}
