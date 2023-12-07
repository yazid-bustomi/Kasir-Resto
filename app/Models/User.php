<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $primaryKey = 'id_users';
    protected $guarded = ['id_users'];
    protected $table = 'tbl_users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role',

    ];
    protected $hidden = [
        'password',
    ];

    // user bisa memiliki banya order
    public function order()
    {
        return $this->hasMany(Order::class);
    }

    // rating hanya bbisa di miliki 1 users
    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
}
