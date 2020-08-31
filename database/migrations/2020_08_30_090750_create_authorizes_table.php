<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authorizes', function (Blueprint $table) {
            $table->increments('authorizeId');
            $table->integer('userId')->unsigned();
            $table->integer('arduinoId')->unsigned();
            $table->timestamps();
            $table->foreign('userId')
                ->on('users')
                ->references('userId')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('arduinoId')
                ->on('arduinos')
                ->references('arduinoId')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authorizes');
    }
}
