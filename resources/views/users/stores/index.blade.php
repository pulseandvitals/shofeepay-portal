@extends('layouts.main')
@section('title','View')
@section('content')
@include('components.page-title',[
    'title' => 'View',
    'bc_1' => 'Store',
    'bc_2' => 'View'
    ])
    <x-container-primary>
        <x-card>
            <h5 class="card-title">Your store</h5>
            @include('users.stores.partials.indexStores')
        </x-card>
    </x-container-primary>
@endsection

