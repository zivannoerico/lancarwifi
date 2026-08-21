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
        Schema::table('coverages', function (Blueprint $table) {
            $table->string('region')->nullable()->after('area_name');
            $table->decimal('latitude', 10, 7)->nullable()->after('status');
            $table->decimal('longitude', 10, 7)->nullable()->after('latitude');
            $table->integer('radius')->default(2500)->after('longitude'); // in meters
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coverages', function (Blueprint $table) {
            $table->dropColumn(['region', 'latitude', 'longitude', 'radius']);
        });
    }
};
