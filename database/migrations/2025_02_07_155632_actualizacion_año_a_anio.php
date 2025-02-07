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
        Schema::table('coches', function (Blueprint $table) {
            $table->integer('anio')->after('modelo')->nullable();
            $table->decimal('precio', 10, 2)->after('anio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coches', function (Blueprint $table) {
            $table->dropColumn(['anio', 'precio']);
        });
    }
};
