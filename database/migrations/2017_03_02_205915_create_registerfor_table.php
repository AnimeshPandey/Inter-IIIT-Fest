<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterforTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerfor', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('package',["yes","no"]);
            $table->string('fest_id');
            $table->string('event_id');
            // $table->foreign('fest_id')->references('fest_id')->on('users')->onDelete('cascade');
            // $table->foreign('event_id')->references('event_id')->on('events')->onDelete('cascade');
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
        Schema::dropIfExists('registerfor');
    }
}
