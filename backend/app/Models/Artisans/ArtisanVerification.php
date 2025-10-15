<?php
declare(strict_types=1);


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtisanVerification extends Model
{
    protected $table = "artisan_verifications";

    protected $guarded = [];


    public function artisan_profile()
    {
        return $this->belongsTo(ArtisanProfile::class, "artisan_profile_id");
    }
}
