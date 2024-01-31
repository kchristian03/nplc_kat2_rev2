<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = [
            [
                'code' => '2EXP15',
                'name' => 'Double EXP 15 Minutes Card',
                'description' => 'Doubles your experience points for 15 minutes.',
                'duration' => 15,
                'price' => 30,
                'image_path' => 'doublexp15.png',
            ],
            [
                'code' => '2EXP30',
                'name' => 'Double EXP 30 Minutes Card',
                'description' => 'Doubles your experience points for 30 minutes.',
                'duration' => 30,
                'price' => 45,
                'image_path' => 'doublexp30.png',
            ],
            [
                'code' => 'HINT',
                'name' => 'Hint Card',
                'description' => 'Provides a hint for a specific puzzle. Can be used once.',
                'duration' => 1,
                'price' => 200,
                'image_path' => 'hint.png',
            ],
            [
                'code' => '2COIN15',
                'name' => 'Double Coin 15 Minutes Card',
                'description' => 'Doubles your earned coins for 15 minutes.',
                'duration' => 15,
                'price' => 30,
                'image_path' => 'doublecoin15.png',
            ],
            [
                'code' => '2COIN30',
                'name' => 'Double Coin 30 Minutes Card',
                'description' => 'Doubles your earned coins for 30 minutes.',
                'duration' => 30,
                'price' => 45,
                'image_path' => 'doublecoin30.png',
            ],
            [
                'code' => 'JB',
                'name' => 'Jailbreak Pass',
                'description' => 'Allows you to escape from security bots or monsters once.',
                'duration' => 1,
                'price' => 30,
                'image_path' => 'jailbreakpass.png',
            ],
            [
                'code' => 'KC',
                'name' => 'Key Card',
                'description' => 'Unlocks specific puzzle.',
                'duration' => 9999999,
                'price' => 50,
                'image_path' => 'keycardpass.png',
            ],
        ];

        foreach ($item as $data) {
            Item::create($data);
        }
    }
}
