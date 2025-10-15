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
        Schema::create('artisan_business_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("artisan_profile_id")->index()->constrained("artisan_profiles")->cascadeOnDelete();
            $table->json("portfolio_images");
            $table->json("certifications")->nullable();
            $table->json("languages_spoken");
            $table->string("payment_preference");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artisan_business_infos');
    }
};
