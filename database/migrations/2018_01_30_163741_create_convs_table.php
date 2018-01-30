<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('f_user')->unsigned()->onDelete('cascade');
            $table->integer('s_user')->unsigned()->onDelete('cascade');
            $table->integer('product_id')->unsigned()->onDelete('cascade');
            $table->string('file')->onDelete('cascade');
            $table->foreign('f_user')->references('id')->on('users');
            $table->foreign('s_user')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('products');

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
        Schema::dropIfExists('convs');
    }
}
