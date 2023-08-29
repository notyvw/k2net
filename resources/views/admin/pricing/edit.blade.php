@extends('layouts.app')

@section('title', 'Pricing')

@section('content')

@include('components.sidebar')

<div class="grid grid-cols-12 gap-4 p-4 sm:ml-64">
    <div class="col-span-2 p-2 text-center text-white bg-gray-700 rounded-md">
        <h1 class="font-semibold text-2xl align-middle">Pricing</h1>
    </div>
    <form action="{{ route('pricing.update', $pricing->id) }}" method="POST" class="col-span-12 grid grid-cols-2 gap-4 bg-white p-4 rounded-lg">
        @csrf
        @method('PUT')
        <div class="col-span-2">
            <p class="text-sm font-bold text-gray-500">Edit Data Pricing</p>
        </div>
        <div class="col-span-1 space-y-2">
            <div>
                <label for="title" class="font-medium m-2">Title</label>
                <input type="text" name="title" id="title" value="{{ $pricing->title }}" class="w-full bg-gray-100 border-gray-400 rounded-md">
            </div>
            <div>
                <label for="price" class="font-medium m-2">Price</label>
                <input type="text" name="price" id="price" value="{{ $pricing->price }}" class="w-full bg-gray-100 border-gray-400 rounded-md">
            </div>
        </div>
        <div class="col-span-1 space-y-2">
            <div>
                <label for="info1" class="font-medium m-2">Informasi 1</label>
                <input type="text" name="info1" id="info1" value="{{ $pricing->info1 }}" class="w-full bg-gray-100 border-gray-400 rounded-md">
            </div>
            <div>
                <label for="info2" class="font-medium m-2">Informasi 2</label>
                <input type="text" name="info2" id="info2" value="{{ $pricing->info2 }}" class="w-full bg-gray-100 border-gray-400 rounded-md">
            </div>
            <div>
                <label for="info3" class="font-medium m-2">Informasi 3</label>
                <input type="text" name="info3" id="info3" value="{{ $pricing->info3 }}" class="w-full bg-gray-100 border-gray-400 rounded-md">
            </div>
        </div>
        <div>

        </div>
        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 text-sm font-medium bg-blue-500 rounded-md text-white">Simpan</button>
        </div>
    </form>
</div>

@endsection