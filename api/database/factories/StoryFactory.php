<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Story>
 */
class StoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "title" => fake()->sentence($nbWords = 5),
            "image_id" => fake()->numberBetween(1, 10),
            "user_id" =>fake()->numberBetween(1, 10),
            "content" => fake()->paragraphs($nb = 3, $asText = true),
            "published" => fake()->boolean($chanceOfGettingTrue = 25),
        ];
    }
}
