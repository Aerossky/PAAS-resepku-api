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
            'message' => "Success",
            'data' => $this->resource ? [
                'id' => $this->id,
                'name' => $this->name,
                'description' => $this->description,
                'instructions' => $this->instructions,
                'ingredients' => $this->ingredients->pluck('name'),
                'created_at' => date_format($this->created_at, 'Y-m-d'),
            ] : null,
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
