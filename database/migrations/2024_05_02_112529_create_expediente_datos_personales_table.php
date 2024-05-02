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
        Schema::create('expediente_datos_personales', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->charset ='utf8';
            $table->collation='utf8_general_ci';
            $table->id();
            $table->text('apellido1')->default(null)->nullable();
            $table->text('apellido')->default(null)->nullable();
            $table->text('apellido2')->default(null)->nullable();
            $table->text('nombre')->default(null)->nullable();
            $table->date('fecha_nacimiento')->default(null)->nullable();
            $table->text('sexo')->default(null)->nullable();
            $table->unsignedBigInteger('sexo_id')->default(null)->nullable();
            $table->foreign('sexo_id')->references('id')->on('sexos');
            $table->text('nacionalidad')->default(null)->nullable();
            $table->unsignedBigInteger('nacionalidad_id')->default(null)->nullable();
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidades');
            $table->text('numero_documento')->default(null)->nullable();
            $table->date('fecha_caducidad_documento')->default(null)->nullable();
            $table->text('tipo_documento')->default(null)->nullable();

            $table->unsignedBigInteger('documento_identificativo_id')->default(null)->nullable();
            $table->foreign('documento_identificativo_id')->references('id')->on('documentos_identificativos');
            $table->text('telefono')->default(null)->nullable();
            $table->text('telefono2')->default(null)->nullable();
            $table->text('fax')->default(null)->nullable();
            $table->text('correo_electronico')->default(null)->nullable();
            $table->text('seg_social')->default(null)->nullable();
            $table->text('seguro_medico')->default(null)->nullable();
            $table->unsignedBigInteger('seguro_medico_id')->default(null)->nullable();
            $table->foreign('seguro_medico_id')->references('id')->on('seguros_medicos');
            $table->text('numero_seguro_medico')->default(null)->nullable();
            $table->text('centro')->default(null)->nullable();
            $table->unsignedBigInteger('centro_id')->default(null)->nullable();
            $table->foreign('centro_id')->references('id')->on('centros');
           

            $table->unsignedBigInteger('domicilio_id')->default(null)->nullable();
            $table->foreign('domicilio_id')->references('id')->on('domicilios');
            $table->text('provincia')->default(null)->nullable();
            $table->text('disponible')->default(null)->nullable();
            $table->text('aseguradora')->default(null)->nullable();
            $table->unsignedBigInteger('aseguradora_id')->default(null)->nullable();
            $table->foreign('aseguradora_id')->references('id')->on('aseguradoras');
            $table->text('poliza')->default(null)->nullable();

            $table->text('carpeta')->default(null)->nullable();
            $table->text('no_por_edad_decesos')->default(null)->nullable();








            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expediente_datos_personales');
    }
};
