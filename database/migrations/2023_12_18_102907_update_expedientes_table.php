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
            $table->dropColumn('patologia_concreta');
            $table->dropColumn('patologia_concreta1');
            $table->dropColumn('patologia_concreta2');
            $table->dropColumn('patologia_concreta3');
            $table->dropColumn('patologia_concreta4');
            $table->dropColumn('patologia_concreta5');
            $table->dropColumn('patologia_concreta6');
            $table->dropColumn('patologia_concreta7');
            $table->dropColumn('patologia_id');
            $table->dropColumn('entidadbancaria');
            $table->dropColumn('entidadbancaria1');
            $table->dropColumn('entidadbancaria2');
            $table->dropColumn('entidadbancaria3');
            $table->dropColumn('entidadbancaria4');
            $table->dropColumn('entidadbancaria5');
            $table->dropColumn('iban');
            $table->dropColumn('iban1');
            $table->dropColumn('iban2');
            $table->dropColumn('iban3');
            $table->dropColumn('iban4');
            $table->dropColumn('iban5');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expedientes', function (Blueprint $table) {
            $table->text('patologia_concreta')->nullable()->default(null);
            $table->text('patologia_concreta1')->nullable()->default(null);
            $table->text('patologia_concreta2')->nullable()->default(null);
            $table->text('patologia_concreta3')->nullable()->default(null);
            $table->text('patologia_concreta4')->nullable()->default(null);
            $table->text('patologia_concreta5')->nullable()->default(null);
            $table->text('patologia_concreta6')->nullable()->default(null);
            $table->text('patologia_concreta7')->nullable()->default(null);
            $table->bigInteger('patologia_id')->nullable()->default(null);
            $table->text('entidadbancaria')->nullable()->default(null);
            $table->text('iban')->nullable()->default(null);
            $table->text('entidadbancaria1')->nullable()->default(null);
            $table->text('iban1')->nullable()->default(null);
            $table->text('entidadbancaria2')->nullable()->default(null);
            $table->text('iban2')->nullable()->default(null);
            $table->text('entidadbancaria3')->nullable()->default(null);
            $table->text('iban3')->nullable()->default(null);
            $table->text('entidadbancaria4')->nullable()->default(null);
            $table->text('iban4')->nullable()->default(null);
            $table->text('entidadbancaria5')->nullable()->default(null);
            $table->text('iban5')->nullable()->default(null);
            
        });
    }
};