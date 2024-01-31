<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(PosSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(ItemUsageSeeder::class);
        $this->call(BonusScoreSeeder::class);
        $this->call(PuzzleSeeder::class);
    }
}
