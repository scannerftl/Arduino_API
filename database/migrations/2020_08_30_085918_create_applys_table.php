<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applys', function (Blueprint $table) {
            $table->increments('applyId');
            $table->integer('methodId')->unsigned();
            $table->integer('componentId')->unsigned();
            $table->timestamps();
            $table->foreign('methodId')
                ->on('methods')
                ->references('methodId')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('componentId')
                ->on('components')
                ->references('componentId')
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
        Schema::dropIfExists('applys');
    }
}
