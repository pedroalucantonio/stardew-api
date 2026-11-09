<?php

namespace App\Services;

use App\Models\Seed;
use Illuminate\Database\Eloquent\Collection;

class SeedService
{
    public function listAll(): Collection
    {
        $seeds = Seed::with('seasons:id,name')->get();

        return $seeds;
    }

    public function create(array $data): Seed
    {
        $seasons = $data['seasons'];
        unset($data['seasons']);

        $seed = Seed::create($data);
        $seed->seasons()->sync($seasons);

        return $seed->load('seasons:id,name');
    }

    public function findById(int $id): Seed
    {
        $seed = Seed::with('seasons:id,name')->findOrFail($id);

        return $seed;
    }

    public function update(int $id, array $data): Seed
    {
        $seed = Seed::findOrFail($id);
        $seasons = $data['seasons'] ?? null;
        unset($data['seasons']);
        $seed->fill($data);

        if (! $seed->regrowable) {
            $seed->{'regrow-days'} = null;
        }

        $seed->save();

        if ($seasons !== null) {
            $seed->seasons()->sync($seasons);
        }

        return $seed->load('seasons:id,name');
    }

    public function delete(int $id): void
    {
        $seed = Seed::findOrFail($id);
        $seed->delete();
    }
}
