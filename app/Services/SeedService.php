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
        if (($data['status'] ?? 'to_read') !== 'finished') {
            $data['rating'] = null;
        }

        $seed = Seed::create($data);

        return $seed;
    }

    public function findById(int $id): Seed
    {
        $seed = Seed::with('seasons:id,name')->findOrFail($id);

        return $seed;
    }

    public function update(int $id, array $data): Seed
    {
        $seed = Seed::findOrFail($id);
        $seed->fill($data);

        if (! $seed->regrowable) {
            $seed->{'regrow-days'} = null;
        }

        $seed->save();

        return $seed;
    }

    public function delete(int $id): void
    {
        $seed = Seed::findOrFail($id);
        $seed->delete();
    }
}
