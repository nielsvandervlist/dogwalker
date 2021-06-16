<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeAppointment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('place');
            $table->integer('time');
            $table->timestamps();
            $table->unsignedBigInteger('walker_id');
            $table->unsignedBigInteger('dog_id');
            $table->foreign('walker_id')->references('id')->on('walker');
            $table->foreign('dog_id')->references('id')->on('dog');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('appointment');
    }
}
