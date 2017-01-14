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
            $table->boolean('admin')->default(false);
            $table->string('imagePath')->default('default.jpg');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('imepriimek')->default('');
            $table->string('ulica')->default('');
            $table->string('posta')->default('');
            $table->string('drzava')->default('');
            $table->string('KREDnosilec')->default('');
            $table->bigInteger('KREDstevilka')->default(0);
            $table->string('KREDmesec')->default(0);
            $table->string('KREDleto')->default(0);
            $table->integer('KREDvarnost')->default(0);
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
