<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Season extends Model
{
    use HasFactory;

    public function seeds(): BelongsToMany
    {
        return $this->belongsToMany(Seed::class, 'seed_season', 'season_id', 'seed_id');
    }
}