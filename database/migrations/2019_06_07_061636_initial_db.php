<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table){
            $table->increments('uid');
            $table->string('name');
            $table->string('email',191)->unique();
            $table->string('phone');
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('logs', function(Blueprint $table){
            $table->increments('lid');
            $table->enum('status',['on','off']);
            $table->integer('uid');
            $table->integer('iid');
            $table->timestamps();
        });

        Schema::create('inputs', function(Blueprint $table){
            $table->increments('iid');
            $table->string('name');
            $table->integer('consumption');
            $table->enum('status',['on','off'])->default('off');
            $table->timestamps();
        });

        Schema::create('settings', function(Blueprint $table){
            $table->increments('sid');
            $table->integer('rate');
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
        Schema::dropIfExists('logs');
        Schema::dropIfExists('inputs');
        Schema::dropIfExists('settings');
    }
}
