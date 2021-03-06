<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sname');
            $table->string('fname');
            $table->string('mobile');
            $table->string('email');
            $table->string('roomNo_id');
            $table->timestamp('check_in');
            $table->timestamp('check_out');
            $table->string('status');
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
        Schema::drop('reservation');
    }
}
