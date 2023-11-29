<?php

namespace Database\Seeders;

use App\Http\Controllers\ProdukKategoryController;
use App\Models\Produk;
use Illuminate\Database\Seeder;

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
            ProdukKategoryController::class,
            OrderSeeder::class,
            ProdukSeeder::class
            // OrderSeeder::class
        ]);
    }
}
