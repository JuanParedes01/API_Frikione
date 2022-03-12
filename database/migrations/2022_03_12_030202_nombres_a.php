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
        Schema::create('Nombress', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Titulo');
            $table->string('descripcion',5000);
            $table->string('fecha_inicio');
            $table->string('fecha_final');
            $table->string('periodo_temporada');
            $table->string('conteo_episodios');
            $table->string('genero',5000);
            $table->string('imagen');
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
        //
    }
};
