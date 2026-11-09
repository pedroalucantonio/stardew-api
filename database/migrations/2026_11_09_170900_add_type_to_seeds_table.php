<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('seeds', function (Blueprint $table) {
            $table->string('type')->default('semente');
        });
    }

    public function down(): void
    {
        Schema::table('seeds', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
