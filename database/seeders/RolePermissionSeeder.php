<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //get roles 'Super Admin' from database, then assign permissions to it
        $role_superAdmin = Role::findByName('Super Admin');
        $role_superAdmin ->givePermissionTo(Permission::findByName('create_user'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('read_user'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('update_user'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('delete_user'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('restore_user'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('create_role'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('read_role'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('update_role'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('delete_role'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('restore_role'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('create_permission'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('read_permission'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('update_permission'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('delete_permission'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('restore_permission'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('set_game_timer'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('edit_game_timer'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('start_game_timer'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('stop_game_timer'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('reset_game_timer'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('set_pos_timer'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('edit_pos_timer'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('view_pos_timer'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('start_pos_timer'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('stop_pos_timer'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('reset_pos_timer'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('view_scoreboard'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('edit_scoreboard'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('set_scoreboard_Status'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('reset_scoreboard'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('add_story'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('edit_story'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('delete_story'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('restore_story'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('view_story'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('assign_win'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('assign_middle'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('assign_forfeit'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('add_score'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('subtract_score'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('edit_score'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('view_score'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('reset_score'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('add_exp'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('subtract_exp'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('edit_exp'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('view_exp'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('reset_exp'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('add_coin'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('subtract_coin'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('edit_coin'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('view_coin'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('reset_coin'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('add_item'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('edit_item'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('view_item'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('delete_item'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('restore_item'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('add_equipment'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('subtract_equipment'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('edit_equipment'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('view_equipment'));
        $role_superAdmin ->givePermissionTo(Permission::findByName('reset_equipment'));



        //get roles 'Admin' from database, then assign permissions to it
        $role_admin = Role::findByName('Admin');
        $role_admin ->givePermissionTo(Permission::findByName('set_game_timer'));
        $role_admin ->givePermissionTo(Permission::findByName('edit_game_timer'));
        $role_admin ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_admin ->givePermissionTo(Permission::findByName('start_game_timer'));
        $role_admin ->givePermissionTo(Permission::findByName('stop_game_timer'));
        $role_admin ->givePermissionTo(Permission::findByName('reset_game_timer'));
        $role_admin ->givePermissionTo(Permission::findByName('set_pos_timer'));
        $role_admin ->givePermissionTo(Permission::findByName('edit_pos_timer'));
        $role_admin ->givePermissionTo(Permission::findByName('view_pos_timer'));
        $role_admin ->givePermissionTo(Permission::findByName('start_pos_timer'));
        $role_admin ->givePermissionTo(Permission::findByName('stop_pos_timer'));
        $role_admin ->givePermissionTo(Permission::findByName('reset_pos_timer'));
        $role_admin ->givePermissionTo(Permission::findByName('view_scoreboard'));
        $role_admin ->givePermissionTo(Permission::findByName('add_story'));
        $role_admin ->givePermissionTo(Permission::findByName('edit_story'));
        $role_admin ->givePermissionTo(Permission::findByName('delete_story'));
        $role_admin ->givePermissionTo(Permission::findByName('restore_story'));
        $role_admin ->givePermissionTo(Permission::findByName('view_story'));
        $role_admin ->givePermissionTo(Permission::findByName('assign_win'));
        $role_admin ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_admin ->givePermissionTo(Permission::findByName('assign_middle'));
        $role_admin ->givePermissionTo(Permission::findByName('assign_forfeit'));
        $role_admin ->givePermissionTo(Permission::findByName('add_score'));
        $role_admin ->givePermissionTo(Permission::findByName('subtract_score'));
        $role_admin ->givePermissionTo(Permission::findByName('edit_score'));
        $role_admin ->givePermissionTo(Permission::findByName('view_score'));
        $role_admin ->givePermissionTo(Permission::findByName('reset_score'));
        $role_admin ->givePermissionTo(Permission::findByName('add_exp'));
        $role_admin ->givePermissionTo(Permission::findByName('subtract_exp'));
        $role_admin ->givePermissionTo(Permission::findByName('edit_exp'));
        $role_admin ->givePermissionTo(Permission::findByName('view_exp'));
        $role_admin ->givePermissionTo(Permission::findByName('reset_exp'));
        $role_admin ->givePermissionTo(Permission::findByName('add_coin'));
        $role_admin ->givePermissionTo(Permission::findByName('subtract_coin'));
        $role_admin ->givePermissionTo(Permission::findByName('edit_coin'));
        $role_admin ->givePermissionTo(Permission::findByName('view_coin'));
        $role_admin ->givePermissionTo(Permission::findByName('reset_coin'));
        $role_admin ->givePermissionTo(Permission::findByName('add_item'));
        $role_admin ->givePermissionTo(Permission::findByName('edit_item'));
        $role_admin ->givePermissionTo(Permission::findByName('view_item'));
        $role_admin ->givePermissionTo(Permission::findByName('delete_item'));
        $role_admin ->givePermissionTo(Permission::findByName('restore_item'));
        $role_admin ->givePermissionTo(Permission::findByName('add_equipment'));
        $role_admin ->givePermissionTo(Permission::findByName('subtract_equipment'));
        $role_admin ->givePermissionTo(Permission::findByName('edit_equipment'));
        $role_admin ->givePermissionTo(Permission::findByName('view_equipment'));
        $role_admin ->givePermissionTo(Permission::findByName('reset_equipment'));

        //get roles 'Committee' from database, then assign permissions to it
        $role_committee = Role::findByName('Committee');
        $role_committee ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_committee ->givePermissionTo(Permission::findByName('view_scoreboard'));

        //get roles 'LO Puzzle Pos 1' from database, then assign permissions to it
        $role_loPuzzlePos1 = Role::findByName('LO Puzzle Pos 1');
        $role_loPuzzlePos1 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loPuzzlePos1 ->givePermissionTo(Permission::findByName('start_pos_timer'));
        $role_loPuzzlePos1 ->givePermissionTo(Permission::findByName('stop_pos_timer'));
        $role_loPuzzlePos1 ->givePermissionTo(Permission::findByName('reset_pos_timer'));
        $role_loPuzzlePos1 ->givePermissionTo(Permission::findByName('view_pos_timer'));
        $role_loPuzzlePos1 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loPuzzlePos1 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loPuzzlePos1 ->givePermissionTo(Permission::findByName('assign_middle'));
        $role_loPuzzlePos1 ->givePermissionTo(Permission::findByName('assign_forfeit'));
        $role_loPuzzlePos1 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loPuzzlePos1 ->givePermissionTo(Permission::findByName('view_score'));

        //get roles 'LO Puzzle Pos 2a' from database, then assign permissions to it
        $role_loPuzzlePos2a = Role::findByName('LO Puzzle Pos 2a');
        $role_loPuzzlePos2a ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loPuzzlePos2a ->givePermissionTo(Permission::findByName('start_pos_timer'));
        $role_loPuzzlePos2a ->givePermissionTo(Permission::findByName('stop_pos_timer'));
        $role_loPuzzlePos2a ->givePermissionTo(Permission::findByName('reset_pos_timer'));
        $role_loPuzzlePos2a ->givePermissionTo(Permission::findByName('view_pos_timer'));
        $role_loPuzzlePos2a ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loPuzzlePos2a ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loPuzzlePos2a ->givePermissionTo(Permission::findByName('assign_middle'));
        $role_loPuzzlePos2a ->givePermissionTo(Permission::findByName('assign_forfeit'));
        $role_loPuzzlePos2a ->givePermissionTo(Permission::findByName('add_score'));
        $role_loPuzzlePos2a ->givePermissionTo(Permission::findByName('view_score'));

        //get roles 'LO Puzzle Pos 2b' from database, then assign permissions to it
        $role_loPuzzlePos2b = Role::findByName('LO Puzzle Pos 2b');
        $role_loPuzzlePos2b ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loPuzzlePos2b ->givePermissionTo(Permission::findByName('start_pos_timer'));
        $role_loPuzzlePos2b ->givePermissionTo(Permission::findByName('stop_pos_timer'));
        $role_loPuzzlePos2b ->givePermissionTo(Permission::findByName('reset_pos_timer'));
        $role_loPuzzlePos2b ->givePermissionTo(Permission::findByName('view_pos_timer'));
        $role_loPuzzlePos2b ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loPuzzlePos2b ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loPuzzlePos2b ->givePermissionTo(Permission::findByName('assign_middle'));
        $role_loPuzzlePos2b ->givePermissionTo(Permission::findByName('assign_forfeit'));
        $role_loPuzzlePos2b ->givePermissionTo(Permission::findByName('add_score'));
        $role_loPuzzlePos2b ->givePermissionTo(Permission::findByName('view_score'));

        //get roles 'LO Puzzle Pos 3a' from database, then assign permissions to it
        $role_loPuzzlePos3a = Role::findByName('LO Puzzle Pos 3a');
        $role_loPuzzlePos3a ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loPuzzlePos3a ->givePermissionTo(Permission::findByName('start_pos_timer'));
        $role_loPuzzlePos3a ->givePermissionTo(Permission::findByName('stop_pos_timer'));
        $role_loPuzzlePos3a ->givePermissionTo(Permission::findByName('reset_pos_timer'));
        $role_loPuzzlePos3a ->givePermissionTo(Permission::findByName('view_pos_timer'));
        $role_loPuzzlePos3a ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loPuzzlePos3a ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loPuzzlePos3a ->givePermissionTo(Permission::findByName('assign_middle'));
        $role_loPuzzlePos3a ->givePermissionTo(Permission::findByName('assign_forfeit'));
        $role_loPuzzlePos3a ->givePermissionTo(Permission::findByName('add_score'));
        $role_loPuzzlePos3a ->givePermissionTo(Permission::findByName('view_score'));

        //get roles 'LO Puzzle Pos 3b' from database, then assign permissions to it
        $role_loPuzzlePos3b = Role::findByName('LO Puzzle Pos 3b');
        $role_loPuzzlePos3b ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loPuzzlePos3b ->givePermissionTo(Permission::findByName('start_pos_timer'));
        $role_loPuzzlePos3b ->givePermissionTo(Permission::findByName('stop_pos_timer'));
        $role_loPuzzlePos3b ->givePermissionTo(Permission::findByName('reset_pos_timer'));
        $role_loPuzzlePos3b ->givePermissionTo(Permission::findByName('view_pos_timer'));
        $role_loPuzzlePos3b ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loPuzzlePos3b ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loPuzzlePos3b ->givePermissionTo(Permission::findByName('assign_middle'));
        $role_loPuzzlePos3b ->givePermissionTo(Permission::findByName('assign_forfeit'));
        $role_loPuzzlePos3b ->givePermissionTo(Permission::findByName('add_score'));
        $role_loPuzzlePos3b ->givePermissionTo(Permission::findByName('view_score'));

        //get roles 'LO Puzzle Pos 4a' from database, then assign permissions to it
        $role_loPuzzlePos4a = Role::findByName('LO Puzzle Pos 4a');
        $role_loPuzzlePos4a ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loPuzzlePos4a ->givePermissionTo(Permission::findByName('start_pos_timer'));
        $role_loPuzzlePos4a ->givePermissionTo(Permission::findByName('stop_pos_timer'));
        $role_loPuzzlePos4a ->givePermissionTo(Permission::findByName('reset_pos_timer'));
        $role_loPuzzlePos4a ->givePermissionTo(Permission::findByName('view_pos_timer'));
        $role_loPuzzlePos4a ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loPuzzlePos4a ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loPuzzlePos4a ->givePermissionTo(Permission::findByName('assign_middle'));
        $role_loPuzzlePos4a ->givePermissionTo(Permission::findByName('assign_forfeit'));
        $role_loPuzzlePos4a ->givePermissionTo(Permission::findByName('add_score'));
        $role_loPuzzlePos4a ->givePermissionTo(Permission::findByName('view_score'));

        //get roles 'LO Puzzle Pos 4b' from database, then assign permissions to it
        $role_loPuzzlePos4b = Role::findByName('LO Puzzle Pos 4b');
        $role_loPuzzlePos4b ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loPuzzlePos4b ->givePermissionTo(Permission::findByName('start_pos_timer'));
        $role_loPuzzlePos4b ->givePermissionTo(Permission::findByName('stop_pos_timer'));
        $role_loPuzzlePos4b ->givePermissionTo(Permission::findByName('reset_pos_timer'));
        $role_loPuzzlePos4b ->givePermissionTo(Permission::findByName('view_pos_timer'));
        $role_loPuzzlePos4b ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loPuzzlePos4b ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loPuzzlePos4b ->givePermissionTo(Permission::findByName('assign_middle'));
        $role_loPuzzlePos4b ->givePermissionTo(Permission::findByName('assign_forfeit'));
        $role_loPuzzlePos4b ->givePermissionTo(Permission::findByName('add_score'));
        $role_loPuzzlePos4b ->givePermissionTo(Permission::findByName('view_score'));

        //get roles 'LO Puzzle Pos 5' from database, then assign permissions to it
        $role_loPuzzlePos5 = Role::findByName('LO Puzzle Pos 5');
        $role_loPuzzlePos5 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loPuzzlePos5 ->givePermissionTo(Permission::findByName('start_pos_timer'));
        $role_loPuzzlePos5 ->givePermissionTo(Permission::findByName('stop_pos_timer'));
        $role_loPuzzlePos5 ->givePermissionTo(Permission::findByName('reset_pos_timer'));
        $role_loPuzzlePos5 ->givePermissionTo(Permission::findByName('view_pos_timer'));
        $role_loPuzzlePos5 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loPuzzlePos5 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loPuzzlePos5 ->givePermissionTo(Permission::findByName('assign_middle'));
        $role_loPuzzlePos5 ->givePermissionTo(Permission::findByName('assign_forfeit'));
        $role_loPuzzlePos5 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loPuzzlePos5 ->givePermissionTo(Permission::findByName('view_score'));

        //get roles 'LO Rally Pos 1' from database, then assign permissions to it
        $role_loRallyPos1 = Role::findByName('LO Rally Pos 1');
        $role_loRallyPos1 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos1 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos1 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos1 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos1 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos1 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos1 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos1 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos1 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 2' from database, then assign permissions to it
        $role_loRallyPos2 = Role::findByName('LO Rally Pos 2');
        $role_loRallyPos2 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos2 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos2 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos2 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos2 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos2 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos2 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos2 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos2 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 3' from database, then assign permissions to it
        $role_loRallyPos3 = Role::findByName('LO Rally Pos 3');
        $role_loRallyPos3 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos3 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos3 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos3 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos3 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos3 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos3 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos3 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos3 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 4' from database, then assign permissions to it
        $role_loRallyPos4 = Role::findByName('LO Rally Pos 4');
        $role_loRallyPos4 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos4 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos4 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos4 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos4 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos4 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos4 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos4 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos4 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 5' from database, then assign permissions to it
        $role_loRallyPos5 = Role::findByName('LO Rally Pos 5');
        $role_loRallyPos5 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos5 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos5 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos5 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos5 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos5 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos5 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos5 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos5 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 6' from database, then assign permissions to it
        $role_loRallyPos6 = Role::findByName('LO Rally Pos 6');
        $role_loRallyPos6 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos6 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos6 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos6 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos6 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos6 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos6 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos6 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos6 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 7' from database, then assign permissions to it
        $role_loRallyPos7 = Role::findByName('LO Rally Pos 7');
        $role_loRallyPos7 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos7 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos7 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos7 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos7 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos7 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos7 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos7 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos7 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 8' from database, then assign permissions to it
        $role_loRallyPos8 = Role::findByName('LO Rally Pos 8');
        $role_loRallyPos8 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos8 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos8 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos8 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos8 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos8 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos8 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos8 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos8 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 9' from database, then assign permissions to it
        $role_loRallyPos9 = Role::findByName('LO Rally Pos 9');
        $role_loRallyPos9 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos9 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos9 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos9 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos9 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos9 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos9 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos9 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos9 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 10' from database, then assign permissions to it
        $role_loRallyPos10 = Role::findByName('LO Rally Pos 10');
        $role_loRallyPos10 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos10 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos10 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos10 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos10 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos10 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos10 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos10 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos10 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 11' from database, then assign permissions to it
        $role_loRallyPos11 = Role::findByName('LO Rally Pos 11');
        $role_loRallyPos11 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos11 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos11 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos11 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos11 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos11 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos11 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos11 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos11 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 12' from database, then assign permissions to it
        $role_loRallyPos12 = Role::findByName('LO Rally Pos 12');
        $role_loRallyPos12 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos12 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos12 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos12 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos12 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos12 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos12 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos12 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos12 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 13' from database, then assign permissions to it
        $role_loRallyPos13 = Role::findByName('LO Rally Pos 13');
        $role_loRallyPos13 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos13 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos13 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos13 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos13 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos13 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos13 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos13 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos13 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 14' from database, then assign permissions to it
        $role_loRallyPos14 = Role::findByName('LO Rally Pos 14');
        $role_loRallyPos14 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos14 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos14 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos14 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos14 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos14 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos14 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos14 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos14 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 15' from database, then assign permissions to it
        $role_loRallyPos15 = Role::findByName('LO Rally Pos 15');
        $role_loRallyPos15 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos15 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos15 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos15 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos15 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos15 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos15 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos15 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos15 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 16' from database, then assign permissions to it
        $role_loRallyPos16 = Role::findByName('LO Rally Pos 16');
        $role_loRallyPos16 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos16 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos16 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos16 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos16 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos16 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos16 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos16 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos16 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 17' from database, then assign permissions to it
        $role_loRallyPos17 = Role::findByName('LO Rally Pos 17');
        $role_loRallyPos17 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos17 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos17 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos17 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos17 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos17 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos17 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos17 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos17 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'LO Rally Pos 18' from database, then assign permissions to it
        $role_loRallyPos18 = Role::findByName('LO Rally Pos 18');
        $role_loRallyPos18 ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_loRallyPos18 ->givePermissionTo(Permission::findByName('assign_win'));
        $role_loRallyPos18 ->givePermissionTo(Permission::findByName('assign_lose'));
        $role_loRallyPos18 ->givePermissionTo(Permission::findByName('add_score'));
        $role_loRallyPos18 ->givePermissionTo(Permission::findByName('view_score'));
        $role_loRallyPos18 ->givePermissionTo(Permission::findByName('add_exp'));
        $role_loRallyPos18 ->givePermissionTo(Permission::findByName('view_exp'));
        $role_loRallyPos18 ->givePermissionTo(Permission::findByName('add_coin'));
        $role_loRallyPos18 ->givePermissionTo(Permission::findByName('view_coin'));

        //get roles 'Player' from database, then assign permissions to it
        $role_player = Role::findByName('Player');
        $role_player ->givePermissionTo(Permission::findByName('view_game_timer'));
        $role_player ->givePermissionTo(Permission::findByName('view_pos_timer'));
        $role_player ->givePermissionTo(Permission::findByName('view_scoreboard'));
        $role_player ->givePermissionTo(Permission::findByName('view_story'));
        $role_player ->givePermissionTo(Permission::findByName('view_item'));
        $role_player ->givePermissionTo(Permission::findByName('view_equipment'));
        $role_player ->givePermissionTo(Permission::findByName('buy_equipment'));
        $role_player ->givePermissionTo(Permission::findByName('use_equipment'));
        $role_player ->givePermissionTo(Permission::findByName('view_score'));
        $role_player ->givePermissionTo(Permission::findByName('view_exp'));
        $role_player ->givePermissionTo(Permission::findByName('view_coin'));
    }
}
