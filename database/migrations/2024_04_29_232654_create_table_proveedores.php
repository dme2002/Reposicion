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
        Schema::create('table_proveedores', function (Blueprint $table) {
            $table->id('idProveedor');
            $table->string('nombre');
            $table->date('fechaRegistro');
            $table->string('telefono');
            $table->string('correo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_proveedores');
    }
};
