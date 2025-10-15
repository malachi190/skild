<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $table = "service_categories";

    protected $fillable = [
        "name",
        "slug",
        "description",
        "icon_url",
        "is_active"
    ];

    public function sub_categories()
    {
        return $this->hasMany(ServiceSubCategory::class, "service_category_id");
    }
}
