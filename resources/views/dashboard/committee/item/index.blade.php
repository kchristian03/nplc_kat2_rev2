<?php
$title = 'Item';
$uri = 'items';
$create = true;
$read = true;
$update = true;
$delete = true;
$restore = true;
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
                    @include('dashboard.committee.layouts.index.table', ['table_data' => $table_data, 'uri' => $uri, 't_head' => ['Code', 'Name', 'Description', 'Duration', 'Price'], 't_body' => ['code', 'name', 'description', 'duration', 'price'], 'actions' => [$read, $update, $delete, $restore]])
                </div>
            </div>
        </div>
    </div>
@endsection
