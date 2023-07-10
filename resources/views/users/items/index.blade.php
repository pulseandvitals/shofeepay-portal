@extends('layouts.main')
@section('title','View')
@section('content')
@include('components.page-title',[
    'title' => 'View',
    'bc_1' => 'Items',
    'bc_2' => 'View'
    ])
    <x-container-primary>
        <x-card>
            <h5 class="card-title">All Items</h5>
            @include('users.items.partials.itemIndex', ['items' => $items])
        </x-card>
    </x-container-primary>
@endsection

