<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = fake()->sentence($nbWords = 5);
        $sentences =  fake()->paragraphs($nb = 10, $asText = false);
        return [
            //
            "title" => $title,
            "slug" => Str::slug($title),
            "excerpt" => $sentences[0],
            "image_id" => fake()->numberBetween(1, 10),
            "user_id" => fake()->numberBetween(1, 10),
            "content" => '<p>' . implode('</p><p>', $sentences) . '</p>',
            "published" => fake()->boolean($chanceOfGettingTrue = 25),
        ];
    }
}
