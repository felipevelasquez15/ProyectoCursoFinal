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
        Schema::create('carritos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); //  clave foránea
            $table->foreignId('auto_id')->constrained('autos'); //  clave foránea
            $table->string('name');
            $table->string('email');
            $table->string('marca');
            $table->string('modelo');
            $table->integer('anio');
            $table->float('precio', 15, 2);
            $table->text('descripcion');
            $table->string('imagen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carritos');
    }
};
