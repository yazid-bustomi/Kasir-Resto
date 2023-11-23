<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    //     'phone',
    //     'role',

    // ];
    protected $guarded = ['id'];

    protected $hidden = [
        'password',
    ];

    // untuk membuat nama tabel di database supaya sesuai kriteria
    protected $table = 'tbl_users';

    // user bisa memiliki banya order
    public function order(){
        return $this->hasMany(Order::class);
    }

    public function rating(){
        return $this->hasMany(Rating::class);
    }
    

}
