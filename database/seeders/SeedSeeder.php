<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedSeeder extends Seeder
{
    public function run(): void
    {
        $seeds = [
            [
                'name' => 'Parsnip Seeds',
                'price' => 20,
                'days-to-grow' => 4,
                'regrowable' => false,
                'regrow-days' => null,
            ],
            [
                'name' => 'Bean Starter',
                'price' => 60,
                'days-to-grow' => 10,
                'regrowable' => true,
                'regrow-days' => 3,
            ],
            [
                'name' => 'Cauliflower Seeds',
                'price' => 80,
                'days-to-grow' => 12,
                'regrowable' => false,
                'regrow-days' => null,
            ],
            [
                'name' => 'Potato Seeds',
                'price' => 50,
                'days-to-grow' => 6,
                'regrowable' => false,
                'regrow-days' => null,
            ],
            [
                'name' => 'Kale Seeds',
                'price' => 70,
                'days-to-grow' => 6,
                'regrowable' => false,
                'regrow-days' => null,
            ],
            [
                'name' => 'Strawberry Seeds',
                'price' => 100,
                'days-to-grow' => 8,
                'regrowable' => true,
                'regrow-days' => 4,
            ],
            [
                'name' => 'Blueberry Seeds',
                'price' => 80,
                'days-to-grow' => 13,
                'regrowable' => true,
                'regrow-days' => 4,
            ],
            [
                'name' => 'Melon Seeds',
                'price' => 80,
                'days-to-grow' => 12,
                'regrowable' => false,
                'regrow-days' => null,
            ],
            [
                'name' => 'Tomato Seeds',
                'price' => 50,
                'days-to-grow' => 11,
                'regrowable' => true,
                'regrow-days' => 4,
            ],
            [
                'name' => 'Hot Pepper Seeds',
                'price' => 40,
                'days-to-grow' => 5,
                'regrowable' => true,
                'regrow-days' => 3,
            ],
            [
                'name' => 'Corn Seeds',
                'price' => 150,
                'days-to-grow' => 14,
                'regrowable' => true,
                'regrow-days' => 4,
            ],
            [
                'name' => 'Pumpkin Seeds',
                'price' => 100,
                'days-to-grow' => 13,
                'regrowable' => false,
                'regrow-days' => null,
            ],
            [
                'name' => 'Cranberry Seeds',
                'price' => 240,
                'days-to-grow' => 7,
                'regrowable' => true,
                'regrow-days' => 5,
            ],
            [
                'name' => 'Yam Seeds',
                'price' => 60,
                'days-to-grow' => 10,
                'regrowable' => false,
                'regrow-days' => null,
            ],
        ];

        foreach ($seeds as $seed) {
            DB::table('seeds')->updateOrInsert(
                ['name' => $seed['name']],
                [
                    'price' => $seed['price'],
                    'days-to-grow' => $seed['days-to-grow'],
                    'regrowable' => $seed['regrowable'],
                    'regrow-days' => $seed['regrow-days'],
                ]
            );
        }
    }
}