<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'tbl_ratings'; 

    protected $primaryKey = 'review_id'; 

    protected $fillable = [
        'review_id',
        'user_name',
        'user_rating',
        'user_review',
        'datetime',
    ];
}
