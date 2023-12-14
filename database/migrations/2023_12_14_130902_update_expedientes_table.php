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
        Schema::table('expedientes', function (Blueprint $table) {
            $table->text('patologia_concreta2')->after('patologia_concreta')->nullable()->default(null);
            $table->text('patologia_concreta3')->after('patologia_concreta2')->nullable()->default(null);
            $table->text('patologia_concreta4')->after('patologia_concreta3')->nullable()->default(null);
            $table->text('patologia_concreta5')->after('patologia_concreta4')->nullable()->default(null);
            $table->text('patologia_concreta6')->after('patologia_concreta5')->nullable()->default(null);
            $table->text('patologia_concreta7')->after('patologia_concreta6')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expedientes', function (Blueprint $table) {
            $table->dropColumn('patologia_concreta2');
            $table->dropColumn('patologia_concreta3');
            $table->dropColumn('patologia_concreta4');
            $table->dropColumn('patologia_concreta5');
            $table->dropColumn('patologia_concreta6');
            $table->dropColumn('patologia_concreta7');

        });
    }
};
