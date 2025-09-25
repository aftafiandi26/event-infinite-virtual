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
            // Add new fields for registration form
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name')->nullable();
            $table->string('phone')->after('last_name');
            $table->string('address')->after('last_name')->nullable();
            $table->string('verification_token')->nullable()->after('email_verified_at');
            $table->boolean('is_verified')->default(false)->after('verification_token');

            // Active System:
            // 0 = Inactive
            // 1 = Active
            $table->boolean('active')->default(false)->after('is_verified');

            // Level Account System:
            // 0 = Inactive/Unverified
            // 1 = Admin
            // 2 = User/Regular User
            // 3 = Premium User
            // 4 = VIP User
            $table->tinyInteger('level_account')->default(0)->after('active');

            // participant_stat for additional user categorization
            // 0 = Default
            // 1 = Internal
            // 2 = External
            $table->tinyInteger('participant_stat')->default(0)->after('level_account');

            $table->string('identity_company')->nullable()->after('participant_stat');
            $table->string('identity_company_address')->nullable()->after('identity_company');
            $table->string('profile_photo')->nullable()->after('identity_company_address');

            // Modify existing name field to be nullable since we now have first_name and last_name
            $table->string('name')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Remove added fields
            $table->dropColumn(['first_name', 'last_name', 'phone', 'address', 'verification_token', 'is_verified', 'active', 'level_account', 'participant_stat', 'identity_company', 'identity_company_address', 'profile_photo']);

            // Restore name field to not nullable
            $table->string('name')->nullable(false)->change();
        });
    }
};
