<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $indexExists = DB::selectOne("SHOW INDEX FROM consentimientos WHERE Key_name = 'consentimientos_cedula_unique'");

        if ($indexExists) {
            Schema::table('consentimientos', function (Blueprint $table) {
                $table->dropUnique('consentimientos_cedula_unique');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consentimientos', function (Blueprint $table) {
            $table->unique('cedula');
        });
    }
};
