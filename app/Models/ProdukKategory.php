<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukKategory extends Model
{
    use HasFactory;

    protected $guarded = ['id_produk_kategories'];
    protected $fillable = ['nama_kategori'];


    public function produks()
    {
        return $this->hasMany(Produk::class, 'id_produks');
    }
    protected $table = 'tbl_produk_kategories';
}
