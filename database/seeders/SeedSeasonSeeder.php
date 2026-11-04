<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedSeasonSeeder extends Seeder
{
    public function run(): void
    {
        $seasonIds = DB::table('seasons')->pluck('id', 'name');
        $seedIds = DB::table('seeds')->pluck('id', 'name');

        $seedSeasons = [
            'Parsnip Seeds' => ['spring'],
            'Bean Starter' => ['spring'],
            'Cauliflower Seeds' => ['spring'],
            'Potato Seeds' => ['spring'],
            'Kale Seeds' => ['spring'],
            'Strawberry Seeds' => ['spring'],
            'Blueberry Seeds' => ['summer'],
            'Melon Seeds' => ['summer'],
            'Tomato Seeds' => ['summer'],
            'Hot Pepper Seeds' => ['summer'],
            'Corn Seeds' => ['summer', 'fall'],
            'Pumpkin Seeds' => ['fall'],
            'Cranberry Seeds' => ['fall'],
            'Yam Seeds' => ['fall', 'winter'],
        ];

        foreach ($seedSeasons as $seedName => $seasons) {
            foreach ($seasons as $seasonName) {
                $pivot = [
                    'seed_id' => $seedIds[$seedName],
                    'season_id' => $seasonIds[$seasonName],
                ];

                if (! DB::table('seed_season')->where($pivot)->exists()) {
                    DB::table('seed_season')->insert($pivot);
                }
            }
        }
    }
}
