<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image')->default('user.png');
            $table->string('nip'); 
            $table->string('pendidikan'); 
            $table->string('kota_lahir'); 
            $table->string('tgl_lahir'); 
            $table->string('tgl_masuk'); 
            $table->string('jk'); 
            $table->string('agama'); 
            $table->string('status'); 
            $table->text('alamat'); 
            $table->string('jenis_karyawan'); 
            $table->integer('divisi_id'); 
            $table->integer('jabatan_id');
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
        Schema::dropIfExists('users');
    }
}
