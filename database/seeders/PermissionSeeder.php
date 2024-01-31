<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create_user']);
        Permission::create(['name' => 'read_user']);
        Permission::create(['name' => 'update_user']);
        Permission::create(['name' => 'delete_user']);
        Permission::create(['name' => 'restore_user']);
        Permission::create(['name' => 'create_role']);
        Permission::create(['name' => 'read_role']);
        Permission::create(['name' => 'update_role']);
        Permission::create(['name' => 'delete_role']);
        Permission::create(['name' => 'restore_role']);
        Permission::create(['name' => 'create_permission']);
        Permission::create(['name' => 'read_permission']);
        Permission::create(['name' => 'update_permission']);
        Permission::create(['name' => 'delete_permission']);
        Permission::create(['name' => 'restore_permission']);
        Permission::create(['name' => 'set_game_timer']);
        Permission::create(['name' => 'edit_game_timer']);
        Permission::create(['name' => 'view_game_timer']);
        Permission::create(['name' => 'start_game_timer']);
        Permission::create(['name' => 'stop_game_timer']);
        Permission::create(['name' => 'reset_game_timer']);
        Permission::create(['name' => 'set_pos_timer']);
        Permission::create(['name' => 'edit_pos_timer']);
        Permission::create(['name' => 'view_pos_timer']);
        Permission::create(['name' => 'start_pos_timer']);
        Permission::create(['name' => 'stop_pos_timer']);
        Permission::create(['name' => 'reset_pos_timer']);
        Permission::create(['name' => 'view_scoreboard']);
        Permission::create(['name' => 'edit_scoreboard']);
        Permission::create(['name' => 'set_scoreboard_Status']);
        Permission::create(['name' => 'reset_scoreboard']);
        Permission::create(['name' => 'add_story']);
        Permission::create(['name' => 'edit_story']);
        Permission::create(['name' => 'delete_story']);
        Permission::create(['name' => 'restore_story']);
        Permission::create(['name' => 'view_story']);
        Permission::create(['name' => 'assign_win']);
        Permission::create(['name' => 'assign_lose']);
        Permission::create(['name' => 'assign_middle']);
        Permission::create(['name' => 'assign_forfeit']);
        Permission::create(['name' => 'add_score']);
        Permission::create(['name' => 'subtract_score']);
        Permission::create(['name' => 'edit_score']);
        Permission::create(['name' => 'view_score']);
        Permission::create(['name' => 'reset_score']);
        Permission::create(['name' => 'add_exp']);
        Permission::create(['name' => 'subtract_exp']);
        Permission::create(['name' => 'edit_exp']);
        Permission::create(['name' => 'view_exp']);
        Permission::create(['name' => 'reset_exp']);
        Permission::create(['name' => 'add_coin']);
        Permission::create(['name' => 'subtract_coin']);
        Permission::create(['name' => 'edit_coin']);
        Permission::create(['name' => 'view_coin']);
        Permission::create(['name' => 'reset_coin']);
        Permission::create(['name' => 'add_item']);
        Permission::create(['name' => 'edit_item']);
        Permission::create(['name' => 'delete_item']);
        Permission::create(['name' => 'restore_item']);
        Permission::create(['name' => 'view_item']);
        Permission::create(['name' => 'add_equipment']);
        Permission::create(['name' => 'subtract_equipment']);
        Permission::create(['name' => 'edit_equipment']);
        Permission::create(['name' => 'view_equipment']);
        Permission::create(['name' => 'reset_equipment']);
        Permission::create(['name' => 'buy_equipment']);
        Permission::create(['name' => 'use_equipment']);

    }
}
