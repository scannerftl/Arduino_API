<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executes', function (Blueprint $table) {
            $table->increments('executeId');
            $table->integer('userId')->unsigned();
            $table->integer('methodId')->unsigned();
            $table->string('result',255);
            $table->timestamps();
            $table->foreign('userId')
                ->on('users')
                ->references('userId')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('methodId')
                ->on('methods')
                ->references('methodId')
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
        Schema::dropIfExists('executes');
    }
}
