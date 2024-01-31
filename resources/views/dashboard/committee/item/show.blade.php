<?php
$title = 'Item';
$uri = 'items';
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
                    @include('dashboard.committee.layouts.show.header', ['title' => $title, 'uri' => $uri])
                    @include('dashboard.committee.layouts.show.form', ['data' => $data, 'uri' => $uri, 'table' => ['Code' => 'code', 'Name' => 'name', 'Description' => 'description', 'Duration' => 'duration', 'Price' => 'price', 'Image' => 'image_path'], 'actions' => [$update, $delete]])
                </div>
            </div>
        </div>
    </div>
@endsection
