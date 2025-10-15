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
        Schema::create('customer_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->index()->constrained("users")->cascadeOnDelete();
            $table->string("address");
            $table->string("city");
            $table->string("state");
            $table->string("country");
            $table->unsignedBigInteger("longitude");
            $table->unsignedBigInteger("latitude");
            $table->string("preffered_payment_method");
            $table->json("saved_payment_methods")->nullable();
            $table->json("notification_preferences")->nullable();
            $table->integer("total_bookings")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_profiles');
    }
};
