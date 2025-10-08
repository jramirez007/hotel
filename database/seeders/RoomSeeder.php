<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roomTypes = RoomType::all();

        if ($roomTypes->isEmpty()) {
            $this->command->warn('No room types found. Please run RoomTypeSeeder first.');
            return;
        }

        foreach ($roomTypes as $roomType) {
            // Generate between 10 and 20 rooms for each room type
            $numberOfRooms = fake()->numberBetween(10, 20);

            for ($i = 0; $i < $numberOfRooms; $i++) {
                // Determine floor based on room type (premium types on higher floors)
                $floor = match ($roomType->name) {
                    'Presidential Suite' => fake()->numberBetween(8, 10),
                    'Executive Suite' => fake()->numberBetween(6, 9),
                    'Junior Suite' => fake()->numberBetween(5, 8),
                    'Deluxe Room' => fake()->numberBetween(3, 7),
                    'Family Room' => fake()->numberBetween(2, 6),
                    default => fake()->numberBetween(1, 5),
                };

                // Generate room number: floor + sequential number
                $roomNumber = ($floor * 100) + fake()->unique()->numberBetween(1, 30);

                // Most rooms should be available by default
                $status = fake()->randomElement([
                    'available',
                    'available',
                    'available',
                    'available',
                    'available',
                    'occupied',
                    'reserved',
                    'maintenance',
                ]);

                Room::create([
                    'room_type_id' => $roomType->id,
                    'room_number' => $roomNumber,
                    'floor' => $floor,
                    'status' => $status,
                    'is_smoking' => fake()->boolean(15), // 15% smoking rooms
                ]);
            }

            // Reset unique for next room type
            fake()->unique(true);
        }

        $this->command->info('Rooms seeded successfully!');
    }
}
