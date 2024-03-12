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
        Schema::table('aseguradoras', function (Blueprint $table) {
            $table->renameColumn('telefono_avisos','telefono1');
            $table->renameColumn('telefono_avisos2','telefono2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aseguradoras', function (Blueprint $table) {
            $table->renameColumn('telefono1','telefono_avisos');
            $table->renameColumn('telefono2','telefono_avisos2');
        });
    }
};
