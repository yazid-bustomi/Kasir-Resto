<?php

namespace Database\Seeders;

use App\Models\Rating;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data dummy
        $rating=Rating::create([
            'review_id' => 6,
            'user_name' => 'John Smith',
            'user_rating' => 4,
            'user_review' => 'Nice Product, Value for money',
            'datetime' => 1621935691,
        ]); 
    }
}
