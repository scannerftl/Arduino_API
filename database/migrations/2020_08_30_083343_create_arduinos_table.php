<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArduinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arduinos', function (Blueprint $table) {
            $table->increments('arduinoId');
            $table->string('name',255);
            $table->string('ipAddress',255);
            $table->string('localisation',255);
            $table->enum('visibility',['visible','hidden'])->default('visible');
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
        Schema::dropIfExists('arduinos');
    }
}
