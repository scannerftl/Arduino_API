<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('components', function (Blueprint $table) {
            $table->increments('componentId');
            $table->integer('arduinoId')->unsigned();
            $table->string('name',255);
            $table->enum('type',['sensors','actuators'])->default('sensors');
            $table->enum('subtype',['LED','Resistance','Diode','Inductance','Transistor',
                                           'Photocoupleur','Memristor','Régulateur','Microprocesseur',
                                           'Microcontrôleur','Quartz','Memory','Opto_coupleur','Afficheur',
                                           'Buzzer','Commutateur','Haut_parleur','Interrupteur','Potentiomètre',
                                           'Roue_codeuse','Capteur_température','Capteur_luminosité','Capteur_optique',
                                           'Capteur_pression','Capteur_champ_magnétique','Caméra','Thermistance','Accéléromètre',
                                           'Gyroscope','Microphone','Ferrite','Fusible','Polyswitch','Relais','Thyristors','Transformateurs',
                                           'Triacs','Diacs','Varistances'])->default('LED');
            $table->enum('visibility',['visible','hidden'])->default('visible');
            $table->timestamps();
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
        Schema::dropIfExists('components');
    }
}
