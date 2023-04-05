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
        Schema::create('user_profile', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('first_name', 60);
            $table->string('last_name', 60)->nullable($value = true)->default(NULL);
            $table->string('phone', 15)->nullable($value = true)->default(NULL);
            $table->text('address')->nullable($value = true)->default(NULL);
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
        Schema::dropIfExists('user_profile');
    }
};
