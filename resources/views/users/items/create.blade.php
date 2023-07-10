@extends('layouts.main')
@section('title','Create')
@section('content')
@include('components.page-title',[
    'title' => 'Create',
    'bc_1' => 'Items',
    'bc_2' => 'Create'
    ])
    <x-container>
        <x-card>
            <h5 class="card-title">Fill-up all the details.</h5>
            @include('components.alerts.success')
            @include('users.items.partials.itemStore')
        </x-card>
    </x-container>
@endsection
