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
                'description' => 'A comfortable standard room with essential amenities perfect for budget travelers',
                'price_per_night' => 79.99,
                'capacity' => 2,
                'amenities' => ['Wi-Fi', 'TV', 'Air Conditioning', 'Private Bathroom', 'Desk'],
            ],
            [
                'name' => 'Deluxe Room',
                'description' => 'Spacious deluxe room with premium amenities and stunning city view',
                'price_per_night' => 129.99,
                'capacity' => 2,
                'amenities' => ['Wi-Fi', 'Smart TV', 'Air Conditioning', 'Private Bathroom', 'Mini Bar', 'City View', 'Coffee Maker'],
            ],
            [
                'name' => 'Suite',
                'description' => 'Luxurious suite with separate living area and premium facilities for ultimate comfort',
                'price_per_night' => 249.99,
                'capacity' => 4,
                'amenities' => ['Wi-Fi', 'Smart TV', 'Air Conditioning', 'Private Bathroom', 'Mini Bar', 'Balcony', 'Living Area', 'Ocean View', 'Jacuzzi'],
            ],
            [
                'name' => 'Family Room',
                'description' => 'Large family room with multiple beds and kid-friendly amenities for the whole family',
                'price_per_night' => 159.99,
                'capacity' => 4,
                'amenities' => ['Wi-Fi', 'TV', 'Air Conditioning', 'Private Bathroom', 'Mini Fridge', 'Extra Beds', 'Game Console'],
            ],
            [
                'name' => 'Executive Suite',
                'description' => 'Premium executive suite with office space and luxury amenities for business travelers',
                'price_per_night' => 349.99,
                'capacity' => 2,
                'amenities' => ['Wi-Fi', 'Smart TV', 'Air Conditioning', 'Private Bathroom', 'Mini Bar', 'Jacuzzi', 'Office Desk', 'Premium View', 'Meeting Area'],
            ],
            [
                'name' => 'Penthouse Suite',
                'description' => 'Top-floor penthouse with panoramic views and exclusive luxury amenities',
                'price_per_night' => 599.99,
                'capacity' => 6,
                'amenities' => ['Wi-Fi', 'Smart TV', 'Air Conditioning', 'Private Bathroom', 'Full Bar', 'Hot Tub', 'Private Terrace', 'Panoramic View', 'Butler Service', 'Kitchen'],
            ],
        ];

        foreach ($roomTypes as $roomType) {
            RoomType::create($roomType);
        }
    }
}
