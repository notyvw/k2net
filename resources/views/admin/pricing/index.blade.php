@extends('layouts.app')

@section('title', 'Pricing')

@section('content')

@include('components.sidebar')

<div class="grid grid-cols-12 gap-4 p-4 sm:ml-64">
    <div class="col-span-12 sm:col-span-2 p-2 text-center text-white bg-gray-700 rounded-md">
        <h1 class="font-semibold text-2xl align-middle">Pricing</h1>
    </div>
    <div class="col-span-10 hidden sm:block"></div>
    @foreach ($pricing as $p)
    <div class="col-span-12 sm:col-span-4 text-center bg-white rounded-xl drop-shadow-xl shadow-lg shadow-gray-400">
        <p class="font-semibold text-2xl uppercase tracking-widest p-6 bg-gray-500 text-white rounded-t-xl">{{ $p->title }}</p>
        <p class="font-semibold text-2xl tracking-wide my-10">{{ $p->price }}</p>
        <div class="space-y-2">
            <p>{{ $p->info1 }}</p>
            <p>{{ $p->info2 }}</p>
            <p>{{ $p->info3 }}</p>
        </div>
        <div class="my-10">
            <a href="{{ route('pricing.edit', $p->id) }}" class="py-1 px-4 font-medium bg-green-500 rounded-lg  text-white">Edit</a>
        </div>
    </div>
    @endforeach
</div>

@endsection
