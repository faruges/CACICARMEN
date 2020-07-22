<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre',100);
            $table->unsignedInteger('reinscripcion_menor_id')->nullable();
            $table->foreign('reinscripcion_menor_id')->references('id')->on('reinscripcion_menor')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('inscripcion_menor_id')->nullable();
            $table->foreign('inscripcion_menor_id')->references('id')->on('inscripcion_menor')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('documentos');
    }
}
