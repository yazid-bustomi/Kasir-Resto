<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukKategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_produk_kategories', function (Blueprint $table) {
            $table->id('id_produk_kategories');
            $table->string('nama_kategori');
            $table->string('keterangan');
            $table->enum('nama_kategori', ['makanan', 'minuman', 'cemilan']);
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
        Schema::dropIfExists('tbl_produk_kategories');
    }
}
