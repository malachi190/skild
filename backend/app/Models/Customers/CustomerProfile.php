<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerProfile extends Model
{
    protected $table = "customer_profiles";

    protected $guarded = [];


    public function user() 
    {
        return $this->belongsTo(User::class, "user_id");
    }

    protected function casts()
    {
        return [
            "saved_payment_methods" => "array",
            "notification_preferences" => "array"
        ];
    }
}
