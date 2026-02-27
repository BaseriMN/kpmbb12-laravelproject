<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // sintax di bawah untuk buat table product
        Schema::create('tb_product', function (Blueprint $table) {
            $table->id('id_product');
            $table->string('nama_product', 150); //default length 255
            $table->integer('harga');
            $table->text('deskripsi_product');
            $table->integer('id_kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
