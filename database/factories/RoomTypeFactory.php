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
            [
                'name' => 'Standard Single',
                'capacity' => 1,
                'beds' => 1,
                'price_range' => [80, 120],
            ],
            [
                'name' => 'Standard Double',
                'capacity' => 2,
                'beds' => 1,
                'price_range' => [120, 160],
            ],
            [
                'name' => 'Twin Room',
                'capacity' => 2,
                'beds' => 2,
                'price_range' => [130, 170],
            ],
            [
                'name' => 'Deluxe Room',
                'capacity' => 3,
                'beds' => 2,
                'price_range' => [180, 250],
            ],
            [
                'name' => 'Executive Suite',
                'capacity' => 4,
                'beds' => 2,
                'price_range' => [300, 400],
            ],
        ];

        $type = fake()->randomElement($types);

        return [
            'name' => $type['name'],
            'description' => fake()->paragraph(),
            'price_per_night' => fake()->randomFloat(2, $type['price_range'][0], $type['price_range'][1]),
            'capacity' => $type['capacity'],
            'number_of_beds' => $type['beds'],
            'amenities' => fake()->randomElements([
                'WiFi',
                'TV',
                'Mini Bar',
                'Air Conditioning',
                'Room Service',
                'Balcony',
                'City View',
                'Ocean View',
                'Safe',
                'Coffee Maker',
                'Bathtub',
                'Shower',
                'Hair Dryer',
                'Work Desk',
            ], fake()->numberBetween(5, 10)),
        ];
    }
}
