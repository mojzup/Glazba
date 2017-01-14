<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('artist_id')->default(0);
            $table->integer('zanr_id')->default(0);
            $table->string('imagePath')->default('slike/default.jpg');
            $table->string('ime');
            $table->integer('leto')->default(0);
            $table->integer('cena');
            $table->integer('format');
            $table->integer('dobavljivost')->default(0);
            $table->text('opis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
