<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UnsplashImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            "id" => $this->id,
            "photo_id" => $this->photo_id,
            "description" => $this->description,
            "urls" => [
                "full" => $this->url_full,
                "regular" => $this->url_regular,
                "small" => $this->url_small,
            ],
            "creator" => [
                "name" => $this->creator_name,
                "username" => $this->creator_username,
                "profile_photo" => $this->creator_profile_photo,
                "profile_url" => $this->creator_profile_url,   
            ]
        ];
    }
}
