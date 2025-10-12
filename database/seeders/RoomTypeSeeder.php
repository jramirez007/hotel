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
                'name' => 'Standard Single',
                'description' => 'A cozy room perfect for solo travelers with a single bed and essential amenities.',
                'price_per_night' => 99.99,
                'capacity' => 1,
                'number_of_beds' => 1,
                'amenities' => ['WiFi', 'TV', 'Air Conditioning', 'Work Desk', 'Private Bathroom', 'Hair Dryer'],
            ],
            [
                'name' => 'Standard Double',
                'description' => 'Comfortable room with a queen-size bed, ideal for couples or business travelers.',
                'price_per_night' => 149.99,
                'capacity' => 2,
                'number_of_beds' => 1,
                'amenities' => ['WiFi', 'TV', 'Air Conditioning', 'Mini Bar', 'Work Desk', 'Private Bathroom', 'Hair Dryer', 'Coffee Maker'],
            ],
            [
                'name' => 'Twin Room',
                'description' => 'Spacious room with two single beds, perfect for friends or colleagues traveling together.',
                'price_per_night' => 159.99,
                'capacity' => 2,
                'number_of_beds' => 2,
                'amenities' => ['WiFi', 'TV', 'Air Conditioning', 'Mini Bar', 'Work Desk', 'Private Bathroom', 'Hair Dryer', 'Coffee Maker', 'Safe'],
            ],
            [
                'name' => 'Deluxe Room',
                'description' => 'Luxurious room with premium amenities, city view, and extra space for relaxation.',
                'price_per_night' => 229.99,
                'capacity' => 3,
                'number_of_beds' => 2,
                'amenities' => ['WiFi', 'Smart TV', 'Air Conditioning', 'Mini Bar', 'Room Service', 'City View', 'Work Desk', 'Private Bathroom', 'Bathtub', 'Hair Dryer', 'Coffee Maker', 'Safe', 'Balcony'],
            ],
            [
                'name' => 'Executive Suite',
                'description' => 'Elegant suite with separate living area, perfect for extended stays and business executives.',
                'price_per_night' => 349.99,
                'capacity' => 4,
                'number_of_beds' => 2,
                'amenities' => ['WiFi', 'Smart TV', 'Air Conditioning', 'Mini Bar', 'Room Service', 'City View', 'Living Room', 'Work Desk', 'Private Bathroom', 'Bathtub', 'Hair Dryer', 'Coffee Maker', 'Safe', 'Balcony', 'Kitchenette'],
            ],
            [
                'name' => 'Presidential Suite',
                'description' => 'The ultimate luxury experience with panoramic views, premium furnishings, and exclusive amenities.',
                'price_per_night' => 599.99,
                'capacity' => 6,
                'number_of_beds' => 3,
                'amenities' => ['WiFi', 'Smart TV', 'Air Conditioning', 'Mini Bar', 'Room Service', 'Ocean View', 'Living Room', 'Dining Area', 'Work Desk', 'Master Bathroom', 'Jacuzzi', 'Hair Dryer', 'Coffee Maker', 'Safe', 'Private Balcony', 'Kitchenette', 'Butler Service'],
            ],
        ];

        foreach ($roomTypes as $roomType) {
            RoomType::create($roomType);
        }

        $this->command->info('Room types created successfully!');
    }
}
