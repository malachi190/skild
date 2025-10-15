<?php
declare(strict_types= 1);

namespace Database\Seeders;

use App\Helpers\ServiceCategoryHelper;
use App\Models\ServiceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (ServiceCategory::count() == 0) {
            $parentCategories = ServiceCategoryHelper::getServiceCategoryArray();

            foreach($parentCategories as $category) {
                ServiceCategory::create($category);
            }
        }
    }
}
