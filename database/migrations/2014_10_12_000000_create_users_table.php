<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fest_id');
            $table->string('name',30);
            $table->string('email',50)->unique();
            $table->string('password',8);
            $table->bigInteger('contact')->nullable();
            $table->string('city',15)->nullable();
            $table->string('state',15)->nullable();
            $table->string('college',50)->nullable();
            $table->enum('gender',["Male","Female"]);
            $table->enum('iiitflag',["Yes","No"])->nullable();
            $table->string('social_id',20)->default("Custom");
            $table->date('date_of_birth',8);
            $table->enum('package',["Yes","No"])->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
