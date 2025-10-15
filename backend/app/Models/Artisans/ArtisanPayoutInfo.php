<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtisanPayoutInfo extends Model
{
    protected $table = "artisan_payout_infos";

    protected $guarded = [];


    public function artisan_profile()
    {
        return $this->belongsTo(ArtisanProfile::class, "artisan_profile_id");
    }
}
