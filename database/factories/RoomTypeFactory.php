<?php

namespace Database\Factories;

use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoomType>
 */
class RoomTypeFactory extends Factory
{
    protected $model = RoomType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = [
            ['name' => 'Single Room', 'capacity' => 1, 'base_price' => 50.00],
            ['name' => 'Double Room', 'capacity' => 2, 'base_price' => 80.00],
            ['name' => 'Deluxe Room', 'capacity' => 2, 'base_price' => 120.00],
            ['name' => 'Suite', 'capacity' => 4, 'base_price' => 200.00],
        ];

        $type = fake()->randomElement($types);

        return [
            'name' => $type['name'],
            'description' => fake()->sentence(),
            'base_price' => $type['base_price'],
            'capacity' => $type['capacity'],
        ];
    }
}
