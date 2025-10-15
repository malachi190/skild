<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Services\CloudinaryService;
use App\Models\User;
use App\Notifications\EmailVerificationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    protected $cloudinaryService;

    public function __construct(CloudinaryService $cloudinaryService)
    {
        $this->cloudinaryService = $cloudinaryService; 
    }

    final public function register(RegisterRequest $request) 
    {
        $request->validated();

        // Hash password
        $password = $request->password;
        $hashed = Hash::make($password);

        // Handle image upload
        $profilePhotoUrl = null;

        if ($request->hasFile("profile_photo")){
            $result = $this->cloudinaryService->uploadFileToCloudinary($request->file("profile_photo"), "skild/profile-photos");

            if ($result['success']) {
                $profilePhotoUrl = $result['url'];
            }
        }

        // Store user info
        $user = User::create([
            "first_name" => $request->first_name,
            "last_name"=> $request->last_name,
            "email"=> $request->email,
            "password"=> $hashed,
            "role" => $request->role,
            "phone_number" => $request->phone_number,
            "photo_url" => $profilePhotoUrl,
        ]);

        // Begin email verification
        $otpCode = str_pad((string) random_int(0, 9999), 4, "0", STR_PAD_LEFT);

        // Store otp in redis cache
        Cache::put("otp", ['email' => $user->email, 'code' => $otpCode], now()->addMinutes(10));
        
        // Send email
        $user->notify(new EmailVerificationMail($user, $otpCode));

        return response()->json([
            "message" => "Account created succesfully",
            "user" => $user
        ], 201);
    }
}

// TODO ==> LOGIN, VERIFY EMAIL, FORGOT PASSWORD