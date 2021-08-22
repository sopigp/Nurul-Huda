<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Santri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santri', function (Blueprint $table) {
            $table->Increments('id_santri');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('dob');
            $table->string('jenis_kelamin');
            $table->string('no_kk');
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->string('anak-ke');
            $table->string('jumlah_anak');
            $table->string('alamat');
            $table->string('file_kk')->nullable();
            $table->string('file_ktp')->nullable();
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
