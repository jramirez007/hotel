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
                'description' => 'Cozy room with a single bed, perfect for solo travelers.',
                'base_price' => 50.00,
                'capacity' => 1,
            ],
            [
                'name' => 'Double Room',
                'description' => 'Comfortable room with a double bed, ideal for couples.',
                'base_price' => 80.00,
                'capacity' => 2,
            ],
            [
                'name' => 'Deluxe Room',
                'description' => 'Spacious room with premium amenities and a beautiful view.',
                'base_price' => 120.00,
                'capacity' => 2,
            ],
            [
                'name' => 'Suite',
                'description' => 'Luxurious suite with separate living area and premium facilities.',
                'base_price' => 200.00,
                'capacity' => 4,
            ],
        ];

        foreach ($roomTypes as $roomType) {
            RoomType::create($roomType);
        }

        $this->command->info('Room types created successfully!');
    }
}
