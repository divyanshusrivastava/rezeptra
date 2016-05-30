<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('patient',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('complaint');
            $table->string('age');
            $table->string('type');  //Old or new patient
            $table->string('phone');
            $table->string('referred_by');
            $table->string('address_id');
            $table->string('patientbioinfo_id');
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
        Schema::drop('patient');
    }
}
