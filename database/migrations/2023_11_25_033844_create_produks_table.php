<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_produks', function (Blueprint $table) {
            $table->id('id_produks');
            $table->string('nama_produks');
            $table->string('kode_produks');

            $table->foreignId('kategori_produks')->references('id_produk_kategories')->on('tbl_produk_kategories');
            $table->string('harga_produks');
            $table->string('stok_produks');
            $table->string('deskripsi_produks');
            $table->string('gambar_produks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_produks');
    }
}
