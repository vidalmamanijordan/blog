<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();//Integer Unsigned Increment
            $table->string('name');//varchar (max caracteres 255)
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();//guardar fechas
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();//created_at updated_at
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
