<?php
declare(strict_types=1);

namespace App\Helpers;

class ServiceCategoryHelper
{
    public static function getServiceCategoryArray()
    {
        return [
            [
                "name" => "Home Maintenance & Repair",
                "slug" => "maintanance",
                "is_active" => true
            ],
            [
                "name" => "Beauty & Personal Care",
                "slug" => "beauty",
                "is_active" => true
            ],
            [
                "name" => "Tech & Electronics",
                "slug" => "tech",
                "is_active" => true
            ],
            [
                "name" => "Automotive",
                "slug" => "autos",
                "is_active" => true
            ],
            [
                "name" => "Creative & Design",
                "slug" => "design",
                "is_active" => true
            ],
            [
                "name" => "Home Services",
                "slug" => "home",
                "is_active" => true
            ],
            [
                "name" => "Food & Catering",
                "slug" => "food",
                "is_active" => true
            ],
        ];
    }

    public static function getServiceSubCategoryArray()
    {
        return [
            // Home Maintanance and Repair
            [
                "name" => "Plumbing",
                "slug" => "plumbing",
                "description" => "pipe repairs, installations, drainage",
                "service_category_id" => 1,
                "is_active" => true
            ],
            [
                "name" => "Electrical Work",
                "slug" => "electricals",
                "description" => "wiring, fixtures, repairs",
                "service_category_id" => 1,
                "is_active" => true
            ],
            [
                "name" => "Carpentry",
                "slug" => "carpentry",
                "description" => "furniture repair, door/window installation",
                "service_category_id" => 1,
                "is_active" => true
            ],
            [
                "name" => "Painting & Decoration",
                "slug" => "painting",
                "description" => "interior/exterior painting",
                "service_category_id" => 1,
                "is_active" => true
            ],
            [
                "name" => "Roofing",
                "slug" => "roofing",
                "description" => "repairs, installations, waterproofing",
                "service_category_id" => 1,
                "is_active" => true
            ],
            [
                "name" => "Bricklaying & Tiling",
                "slug" => "bricklaying",
                "description" => "brickwork, tiling, concrete work",
                "service_category_id" => 1,
                "is_active" => true
            ],
            [
                "name" => "HVAC/AC Repair",
                "slug" => "ac-repair",
                "description" => "air conditioning, ventilation",
                "service_category_id" => 1,
                "is_active" => true
            ],
            [
                "name" => "Locksmith",
                "slug" => "locksmith",
                "description" => "lock installation, key duplication, emergency lockout",
                "service_category_id" => 1,
                "is_active" => true
            ],
            // Beauty & Personal Care
            [
                "name" => "Hairdressing/Barbering",
                "slug" => "hairdressing-barbering",
                "description" => "cuts, styling, braiding",
                "service_category_id" => 2,
                "is_active" => true
            ],
            [
                "name" => "Makeup Artist",
                "slug" => "makeup-artist",
                "description" => "events, bridal, photography",
                "service_category_id" => 2,
                "is_active" => true
            ],
            [
                "name" => "Nail Technician",
                "slug" => "nail-technician",
                "description" => "manicure, pedicure, nail art",
                "service_category_id" => 2,
                "is_active" => true
            ],
            [
                "name" => "Tailoring & Alterations",
                "slug" => "tailoring-alterations",
                "description" => "clothing repair, custom tailoring",
                "service_category_id" => 2,
                "is_active" => true
            ],
            [
                "name" => "Massage Therapy",
                "slug" => "massage-therapy",
                "description" => "therapeutic, relaxation",
                "service_category_id" => 2,
                "is_active" => true
            ],

            // Tech & Electronics
            [
                "name" => "Phone/Computer Repair",
                "slug" => "phone-computer-repair",
                "description" => "screen replacement, software issues",
                "service_category_id" => 3,
                "is_active" => true
            ],
            [
                "name" => "TV/Appliance Repair",
                "slug" => "tv-appliance-repair",
                "description" => "washing machines, refrigerators",
                "service_category_id" => 3,
                "is_active" => true
            ],
            [
                "name" => "CCTV/Security Installation",
                "slug" => "cctv-security-installation",
                "description" => "cameras, alarm systems",
                "service_category_id" => 3,
                "is_active" => true
            ],
            [
                "name" => "Solar Panel Installation",
                "slug" => "solar-panel-installation",
                "description" => "setup, maintenance",
                "service_category_id" => 3,
                "is_active" => true
            ],

            // Automotive
            [
                "name" => "Auto Mechanic",
                "slug" => "auto-mechanic",
                "description" => "car repairs, maintenance",
                "service_category_id" => 4,
                "is_active" => true
            ],
            [
                "name" => "Auto Electrician",
                "slug" => "auto-electrician",
                "description" => "car electrical systems",
                "service_category_id" => 4,
                "is_active" => true
            ],
            [
                "name" => "Car Wash/Detailing",
                "slug" => "car-wash-detailing",
                "description" => "cleaning, polishing",
                "service_category_id" => 4,
                "is_active" => true
            ],
            [
                "name" => "Vulcanizer/Tire Repair",
                "slug" => "vulcanizer-tire-repair",
                "description" => "puncture fixes, tire changes",
                "service_category_id" => 4,
                "is_active" => true
            ],

            // Creative & Design
            [
                "name" => "Photography",
                "slug" => "photography",
                "description" => "events, portraits, product photography",
                "service_category_id" => 5,
                "is_active" => true
            ],
            [
                "name" => "Videography",
                "slug" => "videography",
                "description" => "events, commercials",
                "service_category_id" => 5,
                "is_active" => true
            ],
            [
                "name" => "Graphic Design",
                "slug" => "graphic-design",
                "description" => "logos, flyers, branding",
                "service_category_id" => 5,
                "is_active" => true
            ],
            [
                "name" => "Event Planning/Decoration",
                "slug" => "event-planning-decoration",
                "description" => "weddings, parties",
                "service_category_id" => 5,
                "is_active" => true
            ],

            // Home Services
            [
                "name" => "Cleaning Services",
                "slug" => "cleaning-services",
                "description" => "home, office, deep cleaning",
                "service_category_id" => 6,
                "is_active" => true
            ],
            [
                "name" => "Laundry & Ironing",
                "slug" => "laundry-ironing",
                "description" => "wash, press, dry cleaning",
                "service_category_id" => 6,
                "is_active" => true
            ],
            [
                "name" => "Pest Control",
                "slug" => "pest-control",
                "description" => "fumigation, extermination",
                "service_category_id" => 6,
                "is_active" => true
            ],
            [
                "name" => "Gardening/Landscaping",
                "slug" => "gardening-landscaping",
                "description" => "lawn care, plant maintenance",
                "service_category_id" => 6,
                "is_active" => true
            ],
            [
                "name" => "Moving/Relocation Services",
                "slug" => "moving-relocation-services",
                "description" => "packing, transport",
                "service_category_id" => 6,
                "is_active" => true
            ],

            // Food & Catering
            [
                "name" => "Catering",
                "slug" => "catering",
                "description" => "events, meal prep",
                "service_category_id" => 7,
                "is_active" => true
            ],
            [
                "name" => "Baker/Pastry Chef",
                "slug" => "baker-pastry-chef",
                "description" => "cakes, bread, pastries",
                "service_category_id" => 7,
                "is_active" => true
            ],
            [
                "name" => "Private Chef/Cook",
                "slug" => "private-chef-cook",
                "description" => "home cooking, meal planning",
                "service_category_id" => 7,
                "is_active" => true
            ],

        ];
    }
}