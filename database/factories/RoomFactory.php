<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $statuses = ['available', 'occupied', 'maintenance', 'cleaning'];
        $viewTypes = ['Sea View', 'City View', 'Garden View', 'Mountain View', 'Pool View', 'Street View'];
        
        return [
            'room_type_id' => RoomType::factory(),
            'room_number' => fake()->unique()->numerify('###'),
            'floor' => fake()->numberBetween(1, 10),
            'status' => fake()->randomElement($statuses),
            'view_type' => fake()->randomElement($viewTypes),
            'is_smoking_allowed' => fake()->boolean(20),
            'notes' => fake()->optional(0.3)->sentence(),
        ];
    }
}
