<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('auto_id')->constrained('autos'); // Asegúrate de que el nombre de la tabla sea correcto
            $table->string('marca');
            $table->string('modelo');
            $table->integer('anio');
            $table->float('precio', 15, 2);
            $table->text('descripcion');
            $table->string('imagen')->nullable();
            // Otros campos que puedas necesitar en la tabla de compras
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
        Schema::dropIfExists('compras');
    }
}
