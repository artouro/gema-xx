<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_profiles', function(Blueprint $table){
            $table->string('username', 50)->unique();
            $table->string('pangkalan');
            $table->string('asal_kota');
            $table->string('email');
            $table->string('no_telp');
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_profiles');
    }
}
