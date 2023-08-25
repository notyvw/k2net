@extends('layouts.app')

@section('title', 'Product')

@section('content')

@include('components.sidebar')

<div class="grid grid-cols-12 p-4 sm:ml-64">
    <div class="col-span-4 mb-4 p-2 text-center text-white bg-gray-700 rounded-md">
        <h1 class="font-semibold text-2xl align-middle">Create New Product</h1>
    </div>
    <div class="col-span-12 bg-white p-4 rounded-md">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="foto" class="w-full font-semibold">Foto</label>
                <input type="file" name="foto" id="foto" class="w-full border-1 bg-gray-200 border-gray-200 rounded-sm">
            </div>
            <div class="mb-3">
                <label for="judul" class="w-full font-semibold">Judul</label>
                <input type="text" name="judul" id="judul" class="w-full border-1 bg-gray-200 border-gray-200 rounded-sm">
            </div>
            <div class="mb-3">
                <label for="harga" class="w-full font-semibold">Harga</label>
                <input type="text" name="harga" id="harga" class="w-full border-1 bg-gray-200 border-gray-200 rounded-sm">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-sm font-medium">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection

