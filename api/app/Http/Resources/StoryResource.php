<?php

namespace App\Http\Resources;

use App\Models\UnsplashImage;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoryResource extends JsonResource
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
            "title" => $this->title,
            "image" => UnsplashImage::find($this->image_id),
            "user" => new UserResource($this->user),
            "content" => $this->content,
            "published" => !!$this->published,
        ];
    }
}
