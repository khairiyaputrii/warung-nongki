<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('name', 60);
            $table->bigInteger('price');
            $table->string('pic_file', 255)->nullable($value = true)->default(NULL);
            $table->integer('food_category_id')->nullable($value = true)->default(NULL);
            $table->integer('drink_category_id')->nullable($value = true)->default(NULL);
            $table->timestamps();

            $table->foreign('food_category_id')->on('food_category')->references('id');
            $table->foreign('drink_category_id')->on('drink_category')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
};
