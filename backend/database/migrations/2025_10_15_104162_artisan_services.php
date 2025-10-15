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
        Schema::create("artisan_services", function(Blueprint $table) {
            $table->foreignId("artisan_profile_id")->constrained("artisan_profiles")->cascadeOnDelete();
            $table->foreignId("service_sub_category_id")->constrained("service_sub_categories")->cascadeOnDelete();
            $table->string("custom_rate")->nullable();
            $table->boolean("is_primary_service")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
