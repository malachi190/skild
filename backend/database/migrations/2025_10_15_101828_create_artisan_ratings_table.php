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
        Schema::create('artisan_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId("artisan_profile_id")->index()->constrained("artisan_profiles")->cascadeOnDelete();
            $table->decimal("average_rating");
            $table->unsignedBigInteger("total_reviews");
            $table->unsignedBigInteger("total_jobs_completed");
            $table->unsignedBigInteger("completion_rate_percentage")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artisan_ratings');
    }
};
