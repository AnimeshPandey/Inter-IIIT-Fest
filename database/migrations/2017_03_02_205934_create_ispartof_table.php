<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIspartofTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ispartof', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fest_id');
            $table->string('event_id');
            $table->string('group_id');


            // $table->foreign('fest_id')->references('fest_id')->on('users')->onDelete('cascade');
            // $table->foreign('event_id')->references('event_id')->on('events')->onDelete('cascade');
            // $table->foreign('group_id')->references('group_id')->on('group')->onDelete('cascade');
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
        Schema::dropIfExists('ispartof');
    }
}
