<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_users', function (Blueprint $table){
            $table->string('username', 50)->unique();
            $table->string('password', 255);
            $table->integer('level'); //1 = Admin, 2 = peserta SD, 3 = peserta SMP, 4 = peserta SMA
            $table->string('nama_lengkap');
            $table->string('pangkalan');
            $table->string('asal_kota');
            $table->string('email')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('foto')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('t_users');
    }
}
