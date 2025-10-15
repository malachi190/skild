<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtisanBusinessInfo extends Model
{
    protected $table = "artisan_business_infos";

    protected $guarded = [];


    public function artisan_profile()
    {
        return $this->belongsTo(ArtisanProfile::class, "artisan_profile_id");
    }

    protected function casts()
    {
        return [
            "portfolio_images" => "array",
            "certifications" => "array",
            "languages_spoken" => "array"
        ];
    }
}
