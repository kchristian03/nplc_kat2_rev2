<?php

namespace Database\Seeders;

use App\Models\Pos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rallyData = [
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 30, 'exp_lost' => 22, 'coin_won' => 30, 'coin_lost' => 17, 'item_won' => 'JB', 'item_rate' => 25, 'room' => 'Studio 2 SIFT', 'pos_name' => 'Battle Curling Item'],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 30, 'exp_lost' => 23, 'coin_won' => 30, 'coin_lost' => 16, 'item_won' => 'KC', 'item_rate' => 25, 'room' => 'Kelas 518', 'pos_name' => 'Blindfold Minefield'],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 35, 'exp_lost' => 20, 'coin_won' => 25, 'coin_lost' => 15, 'item_won' => 'HINT', 'item_rate' => 10, 'room' => 'Kelas 518', 'pos_name' => 'Spread It!'],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 45, 'exp_lost' => 22, 'coin_won' => 36, 'coin_lost' => 15, 'item_won' => '2COIN30', 'item_rate' => 5, 'room' => 'SIFT', 'pos_name' => 'Kakuro'],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 45, 'exp_lost' => 20, 'coin_won' => 38, 'coin_lost' => 15, 'item_won' => '2EXP15', 'item_rate' => 15, 'room' => 'SIFT', 'pos_name' => 'Hashi'],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 45, 'exp_lost' => 21, 'coin_won' => 37, 'coin_lost' => 15, 'item_won' => 'HINT', 'item_rate' => 10, 'room' => 'Student Lounge', 'pos_name' => 'Futoshiki'],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 41, 'exp_lost' => 20, 'coin_won' => 30, 'coin_lost' => 12, 'item_won' => '2COIN15', 'item_rate' => 15, 'room' => 'Student Lounge', 'pos_name' => 'Battle Kartu'],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 39, 'exp_lost' => 22, 'coin_won' => 30, 'coin_lost' => 14, 'item_won' => 'KC', 'item_rate' => 25, 'room' => 'Student Lounge', 'pos_name' => 'Battle 24'],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 35, 'exp_lost' => 20, 'coin_won' => 25, 'coin_lost' => 11, 'item_won' => '2COIN30', 'item_rate' => 10, 'room' => 'Kelas 622', 'pos_name' => 'Batlle Post Rotation '],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 43, 'exp_lost' => 25, 'coin_won' => 30, 'coin_lost' => 12, 'item_won' => 'JB', 'item_rate' => 25, 'room' => 'Kelas 623', 'pos_name' => 'Battle Pingpong'],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 30, 'exp_lost' => 20, 'coin_won' => 40, 'coin_lost' => 10, 'item_won' => 'KC', 'item_rate' => 25, 'room' => 'SIFT', 'pos_name' => 'Sudoku'],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 30, 'exp_lost' => 20, 'coin_won' => 40, 'coin_lost' => 19, 'item_won' => 'HINT', 'item_rate' => 10, 'room' => 'SIFT', 'pos_name' => 'Minesweeper'],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 34, 'exp_lost' => 24, 'coin_won' => 25, 'coin_lost' => 18, 'item_won' => '2COIN15', 'item_rate' => 15, 'room' => 'Kelas 519', 'pos_name' => 'Battle Triplet Tower'],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 35, 'exp_lost' => 20, 'coin_won' => 30, 'coin_lost' => 10, 'item_won' => '2COIN15', 'item_rate' => 25, 'room' => 'Studio 1 SIFT', 'pos_name' => 'Battle Duplicate The Ball'],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 38, 'exp_lost' => 20, 'coin_won' => 30, 'coin_lost' => 14, 'item_won' => 'JB', 'item_rate' => 20, 'room' => 'Student Lounge', 'pos_name' => 'Battle Chopstick Tower'],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 30, 'exp_lost' => 20, 'coin_won' => 28, 'coin_lost' => 20, 'item_won' => '2EXP30', 'item_rate' => 10, 'room' => 'Studio 2 SIFT', 'pos_name' => 'Cup Stacking'],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 30, 'exp_lost' => 25, 'coin_won' => 25, 'coin_lost' => 15, 'item_won' => '2EXP30', 'item_rate' => 7, 'room' => 'Kelas 621', 'pos_name' => 'Move It! '],
            ['score_won' => 10, 'score_lost' => 2, 'exp_won' => 36, 'exp_lost' => 20, 'coin_won' => 36, 'coin_lost' => 16, 'item_won' => '2COIN30', 'item_rate' => 20, 'room' => 'QWERTY', 'pos_name' => 'Navigator Observer Excecutor'],
        ];

        foreach ($rallyData as $data) {
            Pos::create($data);
        }
    }
}
