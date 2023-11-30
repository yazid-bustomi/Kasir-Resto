<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\OrderSeeder;
use Database\Seeders\ProdukSeeder;
use App\Http\Controllers\ProdukKategoryController;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ProdukKategorySeeder::class,
            OrderSeeder::class,
            ProdukSeeder::class
            // OrderSeeder::class
        ]);
    }
}
