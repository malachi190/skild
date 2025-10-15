<?php

namespace Database\Seeders;

use App\Helpers\ServiceCategoryHelper;
use App\Models\ServiceSubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (ServiceSubCategory::count() == 0) {
            $subCategories = ServiceCategoryHelper::getServiceSubCategoryArray();

            foreach ($subCategories as $subCategory) {
                ServiceSubCategory::create($subCategory);
            }
        }
    }
}
