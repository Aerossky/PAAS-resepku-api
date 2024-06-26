<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RecipeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nama' => $this->name,
            'deskripsi' => $this->description,
            'instruksi' => $this->instruction,
            'bahan' => $this->ingredients->pluck('name')->toArray(),
            'created_at' => $this->created_at->format('Y-m-d'),
        ];
    }

    public static function error($message = null)
    {
        return [
            'message' => $message,
            'data' => null,
        ];
    }
}
