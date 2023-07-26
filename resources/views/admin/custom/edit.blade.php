@extends('layouts.app')

@section('title', 'Edit Contact')

@section('content')

@include('components.sidebar')

@foreach ($contacts as $contact)

<div class="grid grid-cols-12 p-4 sm:ml-64">
    <div class="col-span-4 mb-4 p-2 text-center text-white bg-gray-700 rounded-md">
        <h1 class="font-semibold text-2xl align-middle">Edit Contact Information</h1>
    </div>
    <div class="col-span-9"></div>
    <div class="col-span-6 p-4 bg-white rounded-md">
        <form action="{{ route('custom.update', $contact->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="alamat" class="w-full font-semibold">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="{{ $contact->alamat }}" class="w-full border-1 border-gray-200 rounded-sm">
            </div>
            <div class="mb-3">
                <label for="email" class="w-full font-semibold">Email</label>
                <input type="text" name="email" id="email" value="{{ $contact->email }}" class="w-full border-1 border-gray-200 rounded-sm">
            </div>
            <div class="mb-3">
                <label for="kontak" class="w-full font-semibold">Kontak</label>
                <input type="text" name="kontak" id="kontak" value="{{ $contact->kontak }}" class="w-full border-1 border-gray-200 rounded-sm">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-sm font-medium">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endforeach

@endsection

