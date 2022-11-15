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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha');
            $table->timestamp('fecha_entrega')->nullable();
            $table->bigInteger('usuario_id');
            $table->decimal('total', 7, 2);
            $table->text('direccion');
            $table->bigInteger('metodo_de_pago_id');
            $table->string('recibo', 50)->nullable();
            $table->char('estado', 1);
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
        Schema::dropIfExists('pedidos');
    }
};
