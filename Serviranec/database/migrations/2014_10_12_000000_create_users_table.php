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
           // $table->string('imagePath');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
           /* $table->string('ulica');
            $table->string('posta');
            $table->string('drzava');
            $table->string('KREDnosilec');
            $table->integer('KREDstevilka');
            $table->string('KREDveljavnost');
            $table->integer('KREDvarnost');*/
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
        Schema::drop('users');
    }
}
