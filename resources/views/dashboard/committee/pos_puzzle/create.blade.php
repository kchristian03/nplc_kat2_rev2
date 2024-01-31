<?php
$title = 'Pos Puzzle';
$uri = 'puzzle';
$update = true;
$delete = true;
?>

@extends('dashboard.committee.layouts.app')

@section('header')
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('dashboard.committee.layouts.sessionChecker')

            <div class="bg-white shadow-xl sm:rounded-lg">
                <div class="container mx-auto p-4">
                    @include('dashboard.committee.layouts.create.header', ['title' => $title, 'uri' => $uri])
                    @include('dashboard.committee.layouts.create.form', ['uri' => $uri, 'table' => ['Pos Code' => 'pos_code', 'Pos Name' => 'pos_name', 'Room' => 'room', 'Score (Win)' => 'score_won', 'Score (Lose)' => 'score_lost', 'Score (Mid)' => 'score_mid', 'Code (Win)' => 'code_won', 'Code (Lose)' => 'code_lost', 'Code (Mid)' => 'code_mid', 'Entry Coin' => 'entry_coin', 'Entry Exp' => 'entry_exp', 'Forfitable' => 'forfitable', 'Max Team' => 'max_team', 'Time' => 'time', 'PIC' => 'pic_committee'], 'actions' => [$update, $delete]])
                </div>
            </div>
        </div>
    </div>
@endsection
