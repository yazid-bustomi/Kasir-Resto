<?php

namespace Database\Seeders;

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
        $data = [
            [
                'id_produk_kategories' => 1,
                'nama_kategori' => 'Dessert',
            ],
            [
                'id_produk_kategories' => 2,
                'nama_kategori' => 'Drinks',
            ],
            [
                'id_produk_kategories' => 3,
                'nama_kategori' => 'Maincourse',
            ],
            [
                'id_produk_kategories' => 4,
                'nama_kategori' => 'Snack',
            ],
            
        ];

        DB::table('tbl_produk_kategories')->insert($data);
    }
}
