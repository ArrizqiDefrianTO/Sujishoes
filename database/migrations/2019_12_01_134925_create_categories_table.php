<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('parent_id')->nullable();
            // field Parent_id digunakan untuk kategori anak/cabang contoh ada kategori sepatu anak/cabang dari kategori sepatu ada sepatu anak,sepatu running dll 
            $table->string('slug');
            // Fungsi dari slug selain untuk memanggil data kita dengan judul, biasa nya bisa juga untuk membuat url kita SEO Friendly , jadi contoh nya kita mengetikkan text input judul nya misal “  cara membuat soto banjar ” ketika kita save maka si slug tadi akan merubah nya menjadi “ cara-membuat-soto-banjar “ yap, dia merubah spasi menjadi “ -  “ kita tidak perlu lagi memanggil artikel kita menggunakan ID cukup dengan SLUG kita tadi saja
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
        Schema::dropIfExists('categories');
    }
}
