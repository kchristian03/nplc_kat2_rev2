<?php
$title = 'Pos Rally';
$uri = 'pos';
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
                    @include('dashboard.committee.layouts.create.form', ['uri' => $uri, 'table' => ['Pos Name' => 'pos_name', 'Room' => 'room', 'Coin (Win)' => 'coin_won', 'Coin (Lose)' => 'coin_lost', 'EXP (Win)' => 'exp_won', 'EXP (Lose)' => 'exp_lost', 'Score (Win)' => 'score_won', 'Score (Lose)' => 'score_lost', 'Item (Win)' => 'item_won', 'Item Rate' => 'item_rate'], 'actions' => [$update, $delete]])
                </div>
            </div>
        </div>
    </div>
@endsection
