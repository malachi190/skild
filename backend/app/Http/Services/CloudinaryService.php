<?php

namespace App\Http\Services;

use Cloudinary\Cloudinary;

class CloudinaryService
{
    protected $cloudinary;

    public function __construct()
    {
        $this->cloudinary = new Cloudinary([
            "cloud" => [
                "cloud_name" => config('services.cloudinary.cloud_name'),
                'api_key' => config('services.cloudinary.api_key'),
                'api_secret' => config('services.cloudinary.api_secret')
            ],
            'url' => [
                'secure' => true
            ]
        ]);
    }


    /**
     * Upload image to cloudinary
     * @param \Illuminate\Http\UploadedFile $file
     * @param string $folder
     */
    public function uploadFileToCloudinary(\Illuminate\Http\UploadedFile $file, string $folder = "skild")
    {
        try {
            $uploadedFile = $this->cloudinary->uploadApi()->upload(
                $file->getRealPath(),
                [
                    'folder' => $folder,
                    'resource_type' => 'image',
                    'transformation' => [
                        'quality' => 'auto',
                        'fetch_quality' => 'auto'
                    ]
                ]
            );

            return [
                'success' => true,
                'url' => $uploadedFile['secure_url'],
                'public_id' => $uploadedFile['public_id']
            ];
        } catch (\Exception $e) {
            \Log::error("Something went wrong", [
                "message" => $e->getMessage(),
            ]);
            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }
    }

    
}