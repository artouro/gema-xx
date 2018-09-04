<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePengerjaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pengerjaan', function(Blueprint $table){
            $table->increments('id_pengerjaan');
            $table->string('username');
            $table->integer('id_matalomba');

            //['a', 'c', 'd', 'e', ...], index = nomor, value = jawaban
            $table->string('jawaban_peserta'); 
            $table->integer('benar');
            $table->integer('salah');
            $table->integer('nilai');
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
        Schema::dropIfExists('t_pengerjaan');
    }
}
