<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roomTypes = [
            [
                'name' => 'Standard Room',
                'description' => 'Comfortable room with essential amenities, perfect for budget-conscious travelers. Features a cozy atmosphere with modern furnishings and all the basics you need for a pleasant stay.',
                'price_per_night' => 89.99,
                'capacity' => 2,
                'number_of_beds' => 1,
                'bed_type' => 'Queen',
                'size_sqm' => 25.00,
                'amenities' => ['Wi-Fi', 'Air Conditioning', 'TV', 'Desk', 'Private Bathroom', 'Toiletries'],
            ],
            [
                'name' => 'Deluxe Room',
                'description' => 'Spacious room with enhanced amenities and elegant decor. Enjoy premium bedding, a work area, and upgraded bathroom facilities for a more luxurious experience.',
                'price_per_night' => 139.99,
                'capacity' => 2,
                'number_of_beds' => 1,
                'bed_type' => 'King',
                'size_sqm' => 35.00,
                'amenities' => ['Wi-Fi', 'Air Conditioning', 'Smart TV', 'Mini Bar', 'Safe', 'Coffee Maker', 'Bathrobe', 'Slippers'],
            ],
            [
                'name' => 'Executive Suite',
                'description' => 'Luxurious suite featuring a separate living area and bedroom. Ideal for business travelers or those seeking extra space and comfort. Includes premium amenities and upscale furnishings.',
                'price_per_night' => 219.99,
                'capacity' => 3,
                'number_of_beds' => 1,
                'bed_type' => 'King',
                'size_sqm' => 50.00,
                'amenities' => ['Wi-Fi', 'Air Conditioning', 'Smart TV', 'Mini Bar', 'Safe', 'Coffee Maker', 'Balcony', 'Bathtub', 'Work Desk', 'Sofa', 'Bathrobe', 'Slippers', 'Premium Toiletries'],
            ],
            [
                'name' => 'Family Room',
                'description' => 'Spacious accommodation designed for families, featuring multiple beds and ample space for children. Includes child-friendly amenities and a comfortable layout for the whole family.',
                'price_per_night' => 179.99,
                'capacity' => 4,
                'number_of_beds' => 2,
                'bed_type' => 'Queen',
                'size_sqm' => 45.00,
                'amenities' => ['Wi-Fi', 'Air Conditioning', 'TV', 'Mini Fridge', 'Coffee Maker', 'Extra Bed Available', 'Baby Cot Available', 'Games Console'],
            ],
            [
                'name' => 'Presidential Suite',
                'description' => 'The ultimate luxury accommodation featuring separate bedroom, living room, dining area, and premium bathroom with jacuzzi. Offers panoramic views, top-tier amenities, and personalized service.',
                'price_per_night' => 499.99,
                'capacity' => 4,
                'number_of_beds' => 1,
                'bed_type' => 'King',
                'size_sqm' => 95.00,
                'amenities' => ['Wi-Fi', 'Air Conditioning', 'Multiple Smart TVs', 'Full Mini Bar', 'Safe', 'Espresso Machine', 'Balcony', 'Jacuzzi', 'Walk-in Closet', 'Dining Table', 'Sofa', 'Premium Bathrobe', 'Slippers', 'Luxury Toiletries', 'Butler Service', 'Separate Living Room'],
            ],
        ];

        foreach ($roomTypes as $type) {
            RoomType::create($type);
        }
    }
}
