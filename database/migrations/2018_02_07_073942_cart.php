<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cart', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();;
            $table->string('email')->nullable();
            $table->integer('phone')->nullable();
            $table->unsignedInteger('id_product');
            $table->string('address')->nullable();
            $table->string('data')->nullable();
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
        Schema::table('cart', function (Blueprint $table) {
            //
        });
    }
}
