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

        $roomNumber = 100;

        foreach ($roomTypes as $index => $roomType) {
            // Create 10-20 rooms for each room type
            $roomCount = fake()->numberBetween(10, 20);
            
            for ($i = 0; $i < $roomCount; $i++) {
                // Calculate floor based on room number
                $floor = (int) ($roomNumber / 100);
                
                Room::create([
                    'room_type_id' => $roomType->id,
                    'room_number' => (string) $roomNumber,
                    'floor' => $floor > 0 ? $floor : 1,
                    'status' => fake()->randomElement([
                        'available',
                        'available',
                        'available',
                        'available',
                        'available',
                        'available', // More likely to be available
                        'occupied',
                        'occupied',
                        'maintenance',
                        'cleaning',
                    ]),
                ]);

                $roomNumber++;
            }
        }

        $this->command->info('Rooms created successfully!');
    }
}
