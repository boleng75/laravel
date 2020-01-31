<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Pendaftaraan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('No_pendaftaraan')->unique();
            $table->string('Nama lengkap');
            $table->string('Jenis_Kelamin');
            $table->string('Asal_sekolah');
            $table->string('Agama');
            $table->string('Golongan_darah');
            $table->string('No_telepon')->unique();
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
        schema::dropIfExist('Pendaftaran');
    }
}
