<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SeedResource extends JsonResource
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
            'name' => $this->name,
            'type' => $this->type,
            'price' => $this->price,
            'days-to-grow' => $this->{'days-to-grow'},
            'regrowable' => $this->regrowable,
            'regrow-days' => $this->{'regrow-days'},
            'seasons' => $this->whenLoaded('seasons', fn () => $this->seasons->map(fn ($season) => [
                'id' => $season->id,
                'name' => $season->name,
            ])),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
