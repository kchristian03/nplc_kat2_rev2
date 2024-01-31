<?php
$title = 'User';
$uri = 'users';
$create = false;
$read = false;
$update = false;
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


                    <p class="text-gray-500 text-xs mt-3">Deafult Password : nplc.user#{id}</p>

                    @include('dashboard.committee.layouts.index.table', ['table_data' => $table_data, 'uri' => $uri, 't_head' => ['Name', 'Username', 'Email'], 't_body' => ['name', 'username', 'email'], 'actions' => [$read, $update, $delete, $restore]])
                </div>
            </div>
        </div>
    </div>
@endsection
