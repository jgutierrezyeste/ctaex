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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            
                $table->string('name',150)->nullable()->default(null);
                $table->string('slug',150);
                $table->unsignedInteger('parent')->default(0);
                $table->smallInteger('order')->default(0);
                $table->boolean('enabled')->default(1);
                $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
