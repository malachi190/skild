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
        Schema::create('artisan_payout_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("artisan_profile_id")->constrained("artisan_profiles")->cascadeOnDelete();
            $table->string("bank_name");
            $table->string("account_number");
            $table->string("payout_method")->nullable();
            $table->string("strip_account_id")->nullable();
            $table->string("paystack_recipient_code")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artisan_payout_infos');
    }
};
