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
        Schema::create('proveedormers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nit_proveed');
            $table->string('nom_provee',80);
            $table->string('direccion_prov',80);
            $table->string('nro_telef',50);
            $table->string('repre_pro',60);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedormers');
    }
};
