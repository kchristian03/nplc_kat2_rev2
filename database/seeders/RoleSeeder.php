<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Committee']);
        Role::create(['name' => 'LO Puzzle Pos 1']);
        Role::create(['name' => 'LO Puzzle Pos 2a']);
        Role::create(['name' => 'LO Puzzle Pos 2b']);
        Role::create(['name' => 'LO Puzzle Pos 3a']);
        Role::create(['name' => 'LO Puzzle Pos 3b']);
        Role::create(['name' => 'LO Puzzle Pos 4a']);
        Role::create(['name' => 'LO Puzzle Pos 4b']);
        Role::create(['name' => 'LO Puzzle Pos 5']);
        Role::create(['name' => 'LO Rally Pos 1']);
        Role::create(['name' => 'LO Rally Pos 2']);
        Role::create(['name' => 'LO Rally Pos 3']);
        Role::create(['name' => 'LO Rally Pos 4']);
        Role::create(['name' => 'LO Rally Pos 5']);
        Role::create(['name' => 'LO Rally Pos 6']);
        Role::create(['name' => 'LO Rally Pos 7']);
        Role::create(['name' => 'LO Rally Pos 8']);
        Role::create(['name' => 'LO Rally Pos 9']);
        Role::create(['name' => 'LO Rally Pos 10']);
        Role::create(['name' => 'LO Rally Pos 11']);
        Role::create(['name' => 'LO Rally Pos 12']);
        Role::create(['name' => 'LO Rally Pos 13']);
        Role::create(['name' => 'LO Rally Pos 14']);
        Role::create(['name' => 'LO Rally Pos 15']);
        Role::create(['name' => 'LO Rally Pos 16']);
        Role::create(['name' => 'LO Rally Pos 17']);
        Role::create(['name' => 'LO Rally Pos 18']);
        Role::create(['name' => 'Player']);
    }
}
