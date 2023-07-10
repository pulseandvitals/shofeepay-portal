@extends('layouts.main')
@section('title','Create')
@section('content')
@include('components.page-title',[
    'title' => 'Create',
    'bc_1' => 'Store',
    'bc_2' => 'Create'
    ])
    <x-container>
        <x-card>
            <h5 class="card-title">Register your store details.</h5>
            @include('components.alerts.success')
            @include('users.stores.partials.storeStores')
        </x-card>
    </x-container>
@endsection

