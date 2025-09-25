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
        Schema::table('users', function (Blueprint $table) {
            // Remove custom verification fields
            $table->dropColumn(['verification_token', 'is_verified']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Add back custom verification fields
            $table->string('verification_token')->nullable()->after('email_verified_at');
            $table->boolean('is_verified')->default(false)->after('verification_token');
        });
    }
};
