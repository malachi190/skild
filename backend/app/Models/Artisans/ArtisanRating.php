<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtisanRating extends Model
{
    protected $table = "artisan_ratings";

    protected $guarded = [];


    public function artisan_profile()
    {
        return $this->belongsTo(ArtisanProfile::class, "artisan_profile_id");
    }
}
