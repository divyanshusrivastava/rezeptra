<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientbioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::create('patientbio',function(Blueprint $table){
            $table->increments('id');
            // $table->string('age');
            $table->string('gender');
            $table->string('bp');
            $table->string('weight');
            $table->string('height');
            $table->string('bloodgroup');
            $table->string('remarks');
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
        Schema::drop('patientbio');
    }
}
