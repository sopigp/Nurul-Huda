<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id_user');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number', 20);
            $table->date('date_of_birth');
            $table->string('address');
            $table->unsignedInteger('roles_id')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('roles', function(Blueprint $kolom){
        $kolom->increments('id_role');
        $kolom->string('namaRule');
        });

        Schema::table('users', function(Blueprint $kolom){
          $kolom->foreign('roles_id')->references('id_role')->on('roles')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('roles')->insert(
          ['id_role'=>1,'namaRule'=>'Super Admin']
        );
        DB::table('roles')->insert(
          ['id_role'=>2,'namaRule'=>'Admin']
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
    }
}
