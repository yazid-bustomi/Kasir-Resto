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
    $kategory1 = ProdukKategory::create([
      'id_produk_kategories' => '1',
      'nama_kategori' => 'DESSERTS'
    ]);

    $kategory2 = ProdukKategory::create([
      'id_produk_kategories' => '2',
      'nama_kategori' => 'DRINKS'
    ]);

    $kategory3 = ProdukKategory::create([
      'id_produk_kategories' => '3',
      'nama_kategori' => 'MAINCOURSE'
    ]);

    $kategory4 = ProdukKategory::create([
      'id_produk_kategories' => '4',
      'nama_kategori' => 'SNACKS'
    ]);
  }
}
