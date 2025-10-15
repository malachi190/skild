<?php
declare(strict_types=1);


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtisanProfile extends Model
{
    protected $table = "artisan_profiles";

    protected $guarded = [];

    public function location()
    {
        return $this->hasOne(ArtisanLocation::class, "artisan_profile_id");
    }

    public function verification()
    {
        return $this->hasOne(ArtisanVerification::class, "artisan_profile_id");
    }

    public function business_info()
    {
        return $this->hasOne(ArtisanBusinessInfo::class, "artisan_profile_id");
    }

    public function rating()
    {
        return $this->hasOne(ArtisanRating::class, "artisan_profile_id");
    }

    public function reviews() 
    {
        return $this->hasMany(ArtisanReview::class, "artisan_profile_id");
    }

    public function payout_infos()
    {
        return $this->hasMany(ArtisanPayoutInfo::class, "artisan_profile_id");
    }

    protected function casts()
    {
        return [
            "working_hours" => "array"
        ];
    }
}
