<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'coin' => 100,
                'exp' => 0,
                'name' => "TIM A",
                'school' => "Sekolah A",
                'score' => 0,
                'progress' => "1",
                'progress_story'=>"",
                'user_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'coin' => 100,
                'exp' => 0,
                'name' => "TIM B",
                'school' => "Sekolah B",
                'score' => 0,
                'progress' => "1",
                'progress_story'=>"",
                'user_id' => 31,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'coin' => 100,
                'exp' => 0,
                'name' => "TIM C",
                'school' => "Sekolah C",
                'score' => 0,
                'progress' => "1",
                'progress_story'=>"",
                'user_id' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'coin' => 100,
                'exp' => 0,
                'name' => "TIM D",
                'school' => "Sekolah D",
                'score' => 0,
                'progress' => "1",
                'progress_story'=>"",
                'user_id' => 33,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'coin' => 100,
                'exp' => 0,
                'name' => "TIM E",
                'school' => "Sekolah E",
                'score' => 0,
                'progress' => "1",
                'progress_story'=>"",
                'user_id' => 34,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'coin' => 100,
                'exp' => 0,
                'name' => "TIM F",
                'school' => "Sekolah F",
                'score' => 0,
                'progress' => "1",
                'progress_story'=>"",
                'user_id' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
