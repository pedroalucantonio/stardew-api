<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Seed extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'days-to-grow',
        'regrowable',
        'regrow-days',
    ];

    public function seasons(): BelongsToMany
    {
        return $this->belongsToMany(Season::class, 'seed_season', 'seed_id', 'season_id');
    }
}
