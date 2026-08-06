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
        $cedulaIndex = DB::selectOne("SHOW INDEX FROM consentimientos WHERE Key_name = 'consentimientos_cedula_unique'");
        if ($cedulaIndex) {
            Schema::table('consentimientos', function (Blueprint $table) {
                $table->dropUnique('consentimientos_cedula_unique');
            });
        }

        $telefonoIndex = DB::selectOne("SHOW INDEX FROM consentimientos WHERE Key_name = 'consentimientos_telefono_index'");
        if (! $telefonoIndex) {
            Schema::table('consentimientos', function (Blueprint $table) {
                $table->index('telefono');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $telefonoIndex = DB::selectOne("SHOW INDEX FROM consentimientos WHERE Key_name = 'consentimientos_telefono_index'");
        if ($telefonoIndex) {
            Schema::table('consentimientos', function (Blueprint $table) {
                $table->dropIndex('consentimientos_telefono_index');
            });
        }

        $cedulaIndex = DB::selectOne("SHOW INDEX FROM consentimientos WHERE Key_name = 'consentimientos_cedula_unique'");
        if (! $cedulaIndex) {
            Schema::table('consentimientos', function (Blueprint $table) {
                $table->unique('cedula');
            });
        }
    }
};
