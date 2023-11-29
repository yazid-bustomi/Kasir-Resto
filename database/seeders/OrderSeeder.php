<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order=Order::create([
            'id_orders' => '1',
            'user_id' => '2',
            'no_order' => '100',
            'bayar' => '20000',
            'total_bayar' => '2000',
            'status' => 'proses'
        ]);

        $order=Order::create([
            'id_orders' => '2',
            'user_id' => '4',
            'no_order' => '9',
            'bayar' => '10000',
            'total_bayar' => '90',
            'status' => 'bayar'
        ]);

    }
}
