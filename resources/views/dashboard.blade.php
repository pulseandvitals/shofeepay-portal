@extends('layouts.main')
@section('title','Dashboard')
@section('content')
@include('components.page-title',[
    'title' => 'Dashboard',
    'bc_1' => 'Home',
    'bc_2' => 'Dashboard'
    ])
    <x-container>
        <div class="card">
            <div class="card-header">{{ __('Create') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('Dashboard') }}
            </div>
        </div>
    </x-container>
@endsection
