{{--<?php--}}
{{--$title = 'Leaderboard';--}}
{{--$uri = 'leaderboard';--}}
{{--?>--}}

{{--@extends('dashboard.committee.layouts.app')--}}

{{--@section('header')--}}
{{--@endsection--}}

{{--@section('content')--}}
{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            @include('dashboard.committee.layouts.sessionChecker')--}}

{{--            <div class="bg-white shadow-xl sm:rounded-lg">--}}
{{--                <div class="container mx-auto p-4">--}}
{{--                    <div class="md:flex md:items-center md:justify-between">--}}
{{--                        <div class="flex-1 min-w-0">--}}
{{--                            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">{{$title}}</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="my-5">--}}
{{--            @livewire('leaderboard')--}}
{{--        </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}


<?php
$title = 'Leaderboard';
$uri = 'leaderboard';
$create = false;
$read = false;
$update = false;
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
                    {{--                    @include('dashboard.committee.layouts.index.searchBar', ['uri' => $uri])--}}
                    {{--                    @include('dashboard.committee.layouts.index.table', ['table_data' => $table_data, 'uri' => $uri, 't_head' => ['Name', 'Score', 'Exp', 'Coin', 'School', 'Pos', 'Story'], 't_body' => ['name', 'score', 'exp', 'coin', 'school', 'progress', 'progress_story'], 'actions' => [$read, $update, $delete, $restore]])--}}
                    <div>
                        @livewire('leaderboard')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
