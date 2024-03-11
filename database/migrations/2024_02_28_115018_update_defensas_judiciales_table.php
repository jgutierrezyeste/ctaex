<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('defensas_judiciales', function (Blueprint $table) {
            
            
            $table->unsignedBigInteger('letrado_id')->change();
            $table->foreign('letrado_id')->references('id')->on('letrados');
            
            $table->unsignedBigInteger('juzgado_id')->change();
            $table->foreign('juzgado_id')->references('id')->on('juzgados');

            
            $table->unsignedBigInteger('motivo_id')->change();
            $table->foreign('motivo_id')->references('id')->on('motivos');
            
            $table->unsignedBigInteger('sexo_id')->change();
            $table->foreign('sexo_id')->references('id')->on('sexos');
            
            $table->unsignedBigInteger('expediente_id')->after('num_expte')->nullable()->default(null);
            $table->foreign('expediente_id')->references('id')->on('expedientes');
            
            $table->unsignedBigInteger('estado_id')->change();
            $table->foreign('estado_id')->references('id')->on('estados');
        });
    }
};
