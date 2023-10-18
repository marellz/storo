<?php

namespace Database\Seeders;

use App\Models\Story;
use App\Models\UnsplashImage;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        $images = UnsplashImage::inRandomOrder()->get();
        foreach (range(1,18) as $key) {

            $user = User::inRandomOrder()->first();
            
            Story::factory()->create([
                "image_id" => $images[$key - 1]->id,
                "user_id" => $user->id,
            ]);
        }
    }
}
