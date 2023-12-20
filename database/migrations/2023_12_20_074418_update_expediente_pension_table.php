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
        Schema::dropIfExists('expediente_pension');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('expediente_pension', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('expediente_id')->nullable()->default(null);
            $table->bigInteger('pension_id')->nullable()->default(null);
            $table->timestamps();
        });
    }
};
