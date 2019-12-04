<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique(); //FIELD INI DIBUAT UNIK UNTUK MENGHINDARI DUPLIKAT DATA
            $table->string('phone_number');
            $table->string('address');
            $table->unsignedBigInteger('district_id'); //FIELD INI AKAN MERUJUK PADA TABLE districts NANTINYA UNTUK MENGAMBIL DATA KOTA CUSTOMER
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('customers');
    }
}
