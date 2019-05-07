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
            #$table->integer('id_role');
            #$table->string('name', 50);
            #$table->string('username', 50)->unique();
            #$table->timestamp('last_login',6)->nullable();
            #$table->string('email', 100);
            #$table->string('password',225);
            #$table->string('role', 50);
            $table->increments('id');
            $table->string('name',100);
            $table->string('email',75)->unique();
            $table->string('username',50)->unique();
            $table->string('password',225);
            $table->tinyInteger('role');
            $table->string('divisi',100);
            $table->boolean('status')->default(0);
            $table->timestamp('last_login',6)->nullable();
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
