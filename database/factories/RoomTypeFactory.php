<?php

namespace Database\Factories;

use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoomType>
 */
class RoomTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RoomType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roomTypes = [
            'Single Room' => ['capacity' => 1, 'price' => [50, 80]],
            'Double Room' => ['capacity' => 2, 'price' => [80, 120]],
            'Twin Room' => ['capacity' => 2, 'price' => [90, 130]],
            'Deluxe Room' => ['capacity' => 2, 'price' => [150, 200]],
            'Suite' => ['capacity' => 4, 'price' => [250, 350]],
            'Family Room' => ['capacity' => 4, 'price' => [180, 250]],
            'Presidential Suite' => ['capacity' => 6, 'price' => [500, 800]],
        ];

        $type = fake()->randomElement(array_keys($roomTypes));
        $typeData = $roomTypes[$type];

        $amenities = fake()->randomElements([
            'WiFi',
            'TV',
            'Air Conditioning',
            'Mini Bar',
            'Room Service',
            'Safe',
            'Balcony',
            'Ocean View',
            'City View',
            'Bathtub',
            'Shower',
            'Hair Dryer',
            'Iron',
            'Coffee Maker',
            'Refrigerator',
        ], fake()->numberBetween(5, 10));

        return [
            'name' => $type,
            'description' => fake()->paragraph(3),
            'price_per_night' => fake()->randomFloat(2, $typeData['price'][0], $typeData['price'][1]),
            'capacity' => $typeData['capacity'],
            'amenities' => $amenities,
        ];
    }
}
