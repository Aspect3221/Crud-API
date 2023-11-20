<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'book_id' => $this->id,
            'title' => $this->author,
            'publication_year' => $this->publication_year,
            'genre' => $this->genre,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
