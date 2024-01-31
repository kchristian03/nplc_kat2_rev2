<?php

namespace Database\Seeders;

use App\Models\ItemUsage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemUsageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                "team_id"=>1,
                "code"=>"EXP",
                "duration"=>now()
            ],
            [
                "team_id"=>1,
                "code"=>"COIN",
                "duration"=>now()
            ],
            [
                "team_id"=>2,
                "code"=>"EXP",
                "duration"=>now()
            ],
            [
                "team_id"=>2,
                "code"=>"COIN",
                "duration"=>now()
            ],
            [
                "team_id"=>3,
                "code"=>"EXP",
                "duration"=>now()
            ],
            [
                "team_id"=>3,
                "code"=>"COIN",
                "duration"=>now()
            ],
            [
                "team_id"=>4,
                "code"=>"EXP",
                "duration"=>now()
            ],
            [
                "team_id"=>4,
                "code"=>"COIN",
                "duration"=>now()
            ],
            [
                "team_id"=>5,
                "code"=>"EXP",
                "duration"=>now()
            ],
            [
                "team_id"=>5,
                "code"=>"COIN",
                "duration"=>now()
            ],
            [
                "team_id"=>6,
                "code"=>"EXP",
                "duration"=>now()
            ],
            [
                "team_id"=>6,
                "code"=>"COIN",
                "duration"=>now()
            ]
        ];

        foreach ($items as $data) {
            ItemUsage::create($data);
        }
    }
}
