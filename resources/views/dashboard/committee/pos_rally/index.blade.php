<?php
$title = 'Pos Rally';
$uri = 'pos';
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
                    @include('dashboard.committee.layouts.index.table', ['table_data' => $table_data, 'uri' => $uri, 't_head' => ['Pos Name', 'Room', 'Coin (Win)', 'Coin (Lose)', 'EXP (Win)', 'EXP (Lose)', 'Score (Win)', 'Score (Lose)', 'Item (Win)', 'Item Rate'], 't_body' => ['pos_name', 'room', 'coin_won', 'coin_lost', 'exp_won', 'exp_lost', 'score_won', 'score_lost', 'item_won', 'item_rate'], 'actions' => [$read, $update, $delete, $restore]])
                </div>
            </div>
        </div>
    </div>
@endsection
