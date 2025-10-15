<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('artisan_verifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId("artisan_profile_id")->index()->constrained("artisan_profiles")->cascadeOnDelete();
            $table->enum("verification_status", ["unverified", "pending", "verified", "rejected"])->default("pending");
            $table->string("id_document_type");
            $table->string("id_document_url");
            $table->enum("verification_badge", ["none", "silver", "gold"])->default("none");
            $table->timestamp("verified_at")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artisan_verifications');
    }
};
