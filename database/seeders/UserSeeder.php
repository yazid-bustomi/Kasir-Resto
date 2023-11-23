<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // menambhkan data manajer
        $manajer=User::create([
            'name' => 'manajer',
            'email' => 'manajer@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '080',
            'role' => 'manajer'
        ]);

        $kasi = User::create([
            'name' => 'kasir',
            'email' => 'kasir@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '080',
            'role' => 'kasir'
        ]);

        $client = User::create([
            'name' => 'client1',
            'email' => 'client1@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '080',
            'role' => 'client'
        ]);

        $client2 = User::create([
            'name' => 'client2',
            'email' => 'client2@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '080',
            'role' => 'client'
        ]);
    }
}
