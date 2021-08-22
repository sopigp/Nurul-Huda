<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Guru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
      {
        Schema::create('guru', function (Blueprint $table) {
            $table->Increments('id_guru');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('dob');
            $table->string('jenis_kelamin');
            $table->string('nik');
            $table->string('no_kk');
            $table->string('no_npwp');
            $table->string('pendidikan');
            $table->date('tgl_masuk_kerja');
            $table->string('alamat');
            $table->string('file_kk')->nullable();
            $table->string('file_ktp')->nullable();
            $table->string('file_npwp')->nullable();
            $table->string('file_ttd')->nullable();
            $table->string('note')->nullable();
            $table->boolean('status')->default(1);
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
        //
    }
}
