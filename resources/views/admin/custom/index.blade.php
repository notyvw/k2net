@extends('layouts.app')

@section('title', 'Custom')

@section('content')

@include('components.sidebar')

<div class="grid grid-cols-12 p-4 sm:ml-64">
    <div class="col-span-3 mb-4 p-2 text-center text-white bg-gray-700 rounded-md">
        <h1 class="font-semibold text-2xl align-middle">Contact Information</h1>
    </div>
    <div class="col-span-9"></div>
    <div class="col-span-6 relative font-semibold p-4 space-y-4 bg-white rounded-md">
        <div class="flex space-x-4 items-center text-lg">
            <i class="fa-solid fa-location-dot"></i>
            <p class="">{{ $contact->alamat }}</p>
        </div>
        <div class="flex space-x-4 items-center text-lg">
            <i class="fa-solid fa-envelope"></i>
            <p class="">{{ $contact->email }}</p>
        </div>
        <div class="flex space-x-4 items-center text-lg">
            <i class="fa-solid fa-phone"></i>
            <p class="">{{ $contact->kontak }}</p>
        </div>
        <div class="absolute right-4 bottom-5 text-sm">
            <a href="{{ route('custom.edit', $contact->id) }}" class="px-4 py-2 bg-green-400 text-white rounded-sm">Edit</a>
        </div>
    </div>
</div>

@endsection

