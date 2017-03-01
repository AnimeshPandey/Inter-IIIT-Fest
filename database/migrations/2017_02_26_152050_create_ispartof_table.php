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
            $table->foreign('user_id',15);
            ->references('users_id')->on('users')
                ->onDelete('cascade');

            $table->foreign('event_id',15);
            ->references('event_id')->on('events')
                ->onDelete('cascade');

            $table->foreign('group_id',15);
            ->references('group_id')->on('group')
                ->onDelete('cascade');

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
