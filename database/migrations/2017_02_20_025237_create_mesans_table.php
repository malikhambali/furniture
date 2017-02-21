<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_barang');
            $table->string('image_barang');
            $table->string('namalengkap');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('email');
            $table->string('jumlah');
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
        Schema::dropIfExists('mesans');
    }
}
