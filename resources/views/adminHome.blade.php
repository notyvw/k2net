@extends('layouts.app')

@section('title', 'Admin')

@section('content')

@include('components.sidebar')

<div class="grid grid-cols-12 p-4 sm:ml-64">
    <div class="flex items-center col-span-3 p-4 bg-gray-700 text-white rounded-md">
        <i class="fa-solid fa-users fa-2x"></i>
        <div class="ml-6">
            <p class="font-semibold text-xl">Jumlah User</p>
            <p class="font-medium text-lg">{{ $count_u }}</p>
        </div>
    </div>
</div>

@endsection
