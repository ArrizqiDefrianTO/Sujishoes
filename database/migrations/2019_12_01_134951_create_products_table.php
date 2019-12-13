<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            // Fungsi dari slug selain untuk memanggil data kita dengan judul, biasa nya bisa juga untuk membuat url kita SEO Friendly , jadi contoh nya kita mengetikkan text input judul nya misal “  cara membuat soto banjar ” ketika kita save maka si slug tadi akan merubah nya menjadi “ cara-membuat-soto-banjar “ yap, dia merubah spasi menjadi “ -  “ kita tidak perlu lagi memanggil artikel kita menggunakan ID cukup dengan SLUG kita tadi saja
            $table->integer('color_id');
            $table->unsignedBigInteger('category_id');
            $table->text('description')->nullable();
            $table->string('image');
            $table->integer('price');
            $table->integer('weight');
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
        Schema::dropIfExists('products');
    }
}
