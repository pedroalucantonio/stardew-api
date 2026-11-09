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
                'type' => 'semente',
                'price' => 20,
                'days-to-grow' => 4,
                'regrowable' => false,
                'regrow-days' => null,
            ],
            [
                'name' => 'Bean Starter',
                'type' => 'semente',
                'price' => 60,
                'days-to-grow' => 10,
                'regrowable' => true,
                'regrow-days' => 3,
            ],
            [
                'name' => 'Cauliflower Seeds',
                'type' => 'semente',
                'price' => 80,
                'days-to-grow' => 12,
                'regrowable' => false,
                'regrow-days' => null,
            ],
            [
                'name' => 'Potato Seeds',
                'type' => 'semente',
                'price' => 50,
                'days-to-grow' => 6,
                'regrowable' => false,
                'regrow-days' => null,
            ],
            [
                'name' => 'Kale Seeds',
                'type' => 'semente',
                'price' => 70,
                'days-to-grow' => 6,
                'regrowable' => false,
                'regrow-days' => null,
            ],
            [
                'name' => 'Strawberry Seeds',
                'type' => 'semente',
                'price' => 100,
                'days-to-grow' => 8,
                'regrowable' => true,
                'regrow-days' => 4,
            ],
            [
                'name' => 'Blueberry Seeds',
                'type' => 'semente',
                'price' => 80,
                'days-to-grow' => 13,
                'regrowable' => true,
                'regrow-days' => 4,
            ],
            [
                'name' => 'Melon Seeds',
                'type' => 'semente',
                'price' => 80,
                'days-to-grow' => 12,
                'regrowable' => false,
                'regrow-days' => null,
            ],
            [
                'name' => 'Tomato Seeds',
                'type' => 'semente',
                'price' => 50,
                'days-to-grow' => 11,
                'regrowable' => true,
                'regrow-days' => 4,
            ],
            [
                'name' => 'Hot Pepper Seeds',
                'type' => 'semente',
                'price' => 40,
                'days-to-grow' => 5,
                'regrowable' => true,
                'regrow-days' => 3,
            ],
            [
                'name' => 'Corn Seeds',
                'type' => 'semente',
                'price' => 150,
                'days-to-grow' => 14,
                'regrowable' => true,
                'regrow-days' => 4,
            ],
            [
                'name' => 'Pumpkin Seeds',
                'type' => 'semente',
                'price' => 100,
                'days-to-grow' => 13,
                'regrowable' => false,
                'regrow-days' => null,
            ],
            [
                'name' => 'Cranberry Seeds',
                'type' => 'semente',
                'price' => 240,
                'days-to-grow' => 7,
                'regrowable' => true,
                'regrow-days' => 5,
            ],
            [
                'name' => 'Yam Seeds',
                'type' => 'semente',
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
                    'type' => $seed['type'],
                    'days-to-grow' => $seed['days-to-grow'],
                    'regrowable' => $seed['regrowable'],
                    'regrow-days' => $seed['regrow-days'],
                ]
            );
        }
    }
}
