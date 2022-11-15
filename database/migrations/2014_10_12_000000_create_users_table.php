<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->char('dni', 8)->unique();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->char('celular', 9)->nullable();
            $table->string('direccion', 50)->nullable();
            $table->string('referencia', 100)->nullable();
            $table->bigInteger('distrito_id')->nullable();
            $table->char('estado', 1);
            $table->char('tipo_usuario', 1);
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
};
