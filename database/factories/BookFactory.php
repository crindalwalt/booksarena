<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'category' => $this->faker->word(),
            'excerpt' => $this->faker->sentence(10),
            'description' => $this->faker->paragraph(5),
            'featured_image' => "https://picsum.photos/200/200",
            'rating' => $this->faker->randomFloat(1, 1, 5),
            'price' => $this->faker->randomFloat(2, 5, 100),
            'old_price' => $this->faker->boolean(30) ? $this->faker->randomFloat(2, 5, 100) : null,
            'quantity' => $this->faker->numberBetween(0, 100),
            'publisher' => $this->faker->company(),
            'language' => $this->faker->languageCode(),
            'ISBN' => $this->faker->isbn13(),
            'dimensions' => $this->faker->randomElement(['6 x 9 inches', '8 x 10 inches', '5 x 8 inches']),
            'weight' => $this->faker->randomElement(['1 lb', '2 lbs', '0.5 lb']),
            'pages' => $this->faker->numberBetween(100, 1000),
            'edition' => $this->faker->randomElement(['First', 'Second', 'Third', 'Fourth']) . ' Edition',
            'author_id' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->randomElement(['disabled', 'active']),
        ];
    }
}
