<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceSubCategory extends Model
{
    protected $table = "service_sub_categories";

    protected $fillable = [
        "name",
        "slug",
        "description",
        "icon_url",
        "is_active"
    ];

    public function service_category()
    {
        return $this->belongsTo(ServiceCategory::class, "service_category_id");
    }
}
