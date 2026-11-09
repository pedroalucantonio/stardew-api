<?php

namespace App\Services;

use App\Models\Season;
use Illuminate\Database\Eloquent\Collection;

class SeasonService
{
    public function listAll(): Collection
    {
        $seasons = Season::all();

        return $seasons;
    }

    public function findById(int $id): Season
    {
        $season = Season::findOrFail($id);

        return $season;
    }
}
