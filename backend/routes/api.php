<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix("v1")->group(function () {
    Route::get("/health-check", action: function() {
        return response()->json([
            "message" => "Welcome to Skild App"
        ], 200);
    });

    Route::post('/register', [AuthController::class, 'register']);
});

