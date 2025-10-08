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
                'name' => 'Single Room',
                'description' => 'A cozy room perfect for solo travelers. Features a comfortable single bed, work desk, and modern amenities. Ideal for business trips or short stays.',
                'price_per_night' => 65.00,
                'capacity' => 1,
                'amenities' => ['WiFi', 'TV', 'Air Conditioning', 'Work Desk', 'Safe', 'Hair Dryer', 'Coffee Maker'],
            ],
            [
                'name' => 'Double Room',
                'description' => 'Spacious room with a queen-size bed, perfect for couples. Enjoy city views and all the comforts needed for a pleasant stay.',
                'price_per_night' => 95.00,
                'capacity' => 2,
                'amenities' => ['WiFi', 'TV', 'Air Conditioning', 'Mini Bar', 'Safe', 'City View', 'Bathtub', 'Hair Dryer', 'Coffee Maker', 'Room Service'],
            ],
            [
                'name' => 'Twin Room',
                'description' => 'Comfortable room featuring two single beds, ideal for friends or colleagues traveling together. Modern decor with all essential amenities.',
                'price_per_night' => 105.00,
                'capacity' => 2,
                'amenities' => ['WiFi', 'TV', 'Air Conditioning', 'Work Desk', 'Safe', 'Shower', 'Hair Dryer', 'Coffee Maker', 'Iron'],
            ],
            [
                'name' => 'Deluxe Room',
                'description' => 'Elegantly designed room with premium furnishings and superior comfort. Features a king-size bed, sitting area, and luxury bathroom amenities.',
                'price_per_night' => 175.00,
                'capacity' => 2,
                'amenities' => ['WiFi', 'TV', 'Air Conditioning', 'Mini Bar', 'Room Service', 'Safe', 'Balcony', 'City View', 'Bathtub', 'Hair Dryer', 'Coffee Maker', 'Refrigerator', 'Iron', 'Robe & Slippers'],
            ],
            [
                'name' => 'Family Room',
                'description' => 'Spacious room designed for families, featuring a king-size bed and two single beds. Perfect for creating memorable family moments with plenty of space for everyone.',
                'price_per_night' => 215.00,
                'capacity' => 4,
                'amenities' => ['WiFi', 'TV', 'Air Conditioning', 'Mini Bar', 'Room Service', 'Safe', 'City View', 'Bathtub', 'Hair Dryer', 'Coffee Maker', 'Refrigerator', 'Iron', 'Extra Pillows'],
            ],
            [
                'name' => 'Suite',
                'description' => 'Luxurious suite with separate living area and bedroom. Features premium amenities, stunning views, and exceptional comfort for the discerning traveler.',
                'price_per_night' => 295.00,
                'capacity' => 4,
                'amenities' => ['WiFi', 'TV', 'Air Conditioning', 'Mini Bar', 'Room Service', 'Safe', 'Balcony', 'Ocean View', 'Bathtub', 'Shower', 'Hair Dryer', 'Coffee Maker', 'Refrigerator', 'Iron', 'Robe & Slippers', 'Living Area'],
            ],
            [
                'name' => 'Presidential Suite',
                'description' => 'The epitome of luxury and elegance. This expansive suite features multiple bedrooms, a grand living area, dining space, and panoramic views. Perfect for VIP guests and special occasions.',
                'price_per_night' => 650.00,
                'capacity' => 6,
                'amenities' => ['WiFi', 'TV', 'Air Conditioning', 'Mini Bar', 'Room Service', 'Safe', 'Balcony', 'Ocean View', 'Bathtub', 'Shower', 'Hair Dryer', 'Coffee Maker', 'Refrigerator', 'Iron', 'Robe & Slippers', 'Living Area', 'Dining Area', 'Kitchenette', 'Butler Service'],
            ],
        ];

        foreach ($roomTypes as $roomType) {
            RoomType::create($roomType);
        }
    }
}
