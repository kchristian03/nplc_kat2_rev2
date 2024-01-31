<?php
$title = 'Bonus Score';
$uri = 'bonus_scores';
$create = false;
$read = false;
$update = true;
$delete = false;
$restore = false;
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
                    @include('dashboard.committee.layouts.index.header', ['title' => $title, 'uri' => $uri, 'create' => $create])
                    @include('dashboard.committee.layouts.index.searchBar', ['uri' => $uri])
                    @include('dashboard.committee.layouts.index.table', ['table_data' => $table_data, 'uri' => $uri, 't_head' => ['Pos 1', 'Pos 2', 'Pos 3', 'Pos 4', 'Pos 5'], 't_body' => ['pos1', 'pos2', 'pos3', 'pos4', 'pos5'], 'actions' => [$read, $update, $delete, $restore]])
                </div>
            </div>
        </div>
    </div>
@endsection
