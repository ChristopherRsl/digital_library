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
            'title' => $this->faker->sentence(5),
            'category' => $this->getRandomCategory(),
            'description' => $this->faker->paragraph,
            'total' => $this->faker->numberBetween(1, 100),
            'file' => null,
            'cover' => null,
        ];
    }
    private function getRandomCategory()
    {
        $categories = ['Fiction', 'Non-fiction', 'Poetry', 'Drama', 'Comics', 'Romance', 'Mystery', 'Fantasy'];
        return $categories[array_rand($categories)];
    }
}
