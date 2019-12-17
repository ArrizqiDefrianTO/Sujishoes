<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldStatusToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //KEMUDIAN TAMBAHKAN FIELDNYA DENGAN TIPE BOOLEAN DAN DISIMPAN SETELAH WEIGHT
            $table->boolean('status')->default(true)->after('weight');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //MAKA AKAN MENGHAPUS FIELD STATUS DARI TABLE PRODUCTS
            $table->dropColumn('status');
        });
    }
}
