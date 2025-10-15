<?php
declare(strict_types=1);


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
        Schema::create('artisan_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->index()->constrained()->cascadeOnDelete();
            $table->foreignId("service_sub_category_id")->index()->constrained("service_sub_categories")->cascadeOnDelete();
            $table->decimal("hourly_rate", 8, 2);
            $table->string("business_name");
            $table->unsignedBigInteger("profile_views")->nullable();
            $table->timestamp("featured_until")->nullable();
            $table->text("bio")->nullable();
            $table->string("years_of_experience")->nullable();
            $table->string("currency")->nullable();
            $table->json("working_hours");
            $table->string("service_radius_km")->nullable();
            $table->enum("availability_status", ["available", "busy", "offline"])->default("available");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artisan_profiles');
    }
};
