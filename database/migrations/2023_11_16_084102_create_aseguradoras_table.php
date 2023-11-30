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
        Schema::create('aseguradoras', function (Blueprint $table) {
            $table->id();
            $table->string('aseguradora',255);
            $table->unsignedBigInteger('telefono_avisos')->nullable()->default(null);
            $table->unsignedBigInteger('telefono_avisos2')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aseguradoras');
    }
};
