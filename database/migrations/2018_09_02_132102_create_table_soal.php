<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSoal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_soal', function(Blueprint $table){
            $table->increments('id_soal');
            $table->integer('id_matalomba')->unsigned();
            $table->text('soal');
            $table->text('gambar');
            $table->integer('jawaban_benar')->unsigned();
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
        Schema::dropIfExists('t_soal');
    }
}
