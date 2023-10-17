<?php

namespace Database\Seeders;

use App\Models\UnsplashImage;
use Database\Factories\StoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UnsplashImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        foreach (range(1, 3) as $page) {
            # code...
            $response = Http::withHeaders([
                'Authorization' => config('unsplash.UNSPLASH_CLIENT_ID'),
                'Accept-Version' => 'v1',
            ])
                ->acceptJson()
                ->withUrlParameters([
                    'page'=> $page,
                ])
                ->get('https://api.unsplash.com/photos');

            if ($response->successful()) {
                foreach ($response->collect() as $image) {
                    UnsplashImage::create([
                        "photo_id" => $image['id'],
                        "description" => $image['description'] ?? 'No description',
                        "url_full" => $image['urls']['raw'],
                        "url_regular" => $image['urls']['raw'],
                        "url_small" => $image['urls']['raw'],
                        "creator_name" => $image['user']['name'],
                        "creator_username" => $image['user']['username'],
                        "creator_profile_photo" => $image['user']['profile_image']['small'],
                        "creator_profile_url" => $image['user']['links']['html'],
                    ]);
                }
            } else {
                Log::debug($response->status());
            }
        }
    }
}
