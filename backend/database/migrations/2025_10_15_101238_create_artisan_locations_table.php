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
        Schema::create('artisan_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("artisan_profile_id")->index()->constrained("artisan_profiles")->cascadeOnDelete();
            $table->string("location_address");
            $table->string("location_city");
            $table->string("location_state");
            $table->string("location_country");
            $table->unsignedBigInteger("longitude")->nullable();
            $table->unsignedBigInteger("latitude")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artisan_locations');
    }
};
