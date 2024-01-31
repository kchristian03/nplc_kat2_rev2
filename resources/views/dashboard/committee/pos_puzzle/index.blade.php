<?php
$title = 'Pos Puzzle';
$uri = 'puzzle';
$create = true;
$read = false;
$update = true;
$delete = true;
$restore = true;
?>

@extends('dashboard.committee.layouts.app')

@section('header')
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            @include('dashboard.committee.layouts.sessionChecker')

            <div class="bg-white shadow-xl sm:rounded-lg">
                <div class="container mx-auto p-4">
                    @include('dashboard.committee.layouts.index.header', ['title' => $title, 'uri' => $uri, 'create' => $create])
                    @include('dashboard.committee.layouts.index.searchBar', ['uri' => $uri])
                    @include('dashboard.committee.layouts.index.table', ['table_data' => $table_data, 'uri' => $uri, 't_head' => ['Pos Code', 'Pos Name', 'Room', 'Score (Win)', 'Score (Lose)', 'Score (Mid)', 'Code (Win)', 'Code (Lose)', 'Code (Mid)', 'Entry Coin', 'Entry Exp', 'Forfitable', 'Max Team', 'Time', 'PIC'], 't_body' => ['pos_code', 'pos_name', 'room', 'score_won', 'score_lost', 'score_mid', 'code_won', 'code_lost', 'code_mid', 'entry_coin', 'entry_exp', 'forfitable', 'max_team', 'time', 'pic_committee'], 'actions' => [$read, $update, $delete, $restore]])
                </div>
            </div>
        </div>
    </div>
@endsection
