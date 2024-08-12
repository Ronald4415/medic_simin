<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes_prods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nit_cli');
            $table->string('nombres_cli',80);
            $table->string('direccion_cli',80);
            $table->string('nro_telef',40);
            $table->string('correo_ele');
            $table->string('foto_cliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes_prods');
    }
};
