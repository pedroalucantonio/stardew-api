<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonSeeder extends Seeder
{
    public function run(): void
    {
        $seasons = [
            ['name' => 'fall', 'description' => 'Available during the fall season.'],
            ['name' => 'winter', 'description' => 'Available during the winter season.'],
            ['name' => 'spring', 'description' => 'Available during the spring season.'],
            ['name' => 'summer', 'description' => 'Available during the summer season.'],
        ];

        foreach ($seasons as $season) {
            DB::table('seasons')->updateOrInsert(
                ['name' => $season['name']],
                ['description' => $season['description']]
            );
        }
    }
}
