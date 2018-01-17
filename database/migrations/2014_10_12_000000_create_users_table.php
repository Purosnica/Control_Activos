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
            $table->increments('Id_administrador');
            $table->string('Correo')->unique();
            $table->string('Password');
            //$table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('Id_empleado')->unique();
            $table->foreign('Id_empleado')->references('Id_empleado')->on('empleado');
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
