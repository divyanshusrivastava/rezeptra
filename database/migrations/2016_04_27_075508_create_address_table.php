<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('address',function(Blueprint $table){
            $table->increments('id');
            $table->string('patient_id');
            $table->string('line1');
            $table->string('line2');
            $table->string('state');
            $table->string('country');
            $table->string('pincode');

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
        Schema::drop('address');
    }
}
