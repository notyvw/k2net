@extends('layouts.app')

@section('title', 'Product')

@section('content')

@include('components.sidebar')

<div class="grid grid-cols-12 p-4 sm:ml-64">
    <div class="col-span-3 mb-4 p-2 text-center text-white bg-gray-700 rounded-md">
        <h1 class="font-semibold text-2xl align-middle">Product</h1>
    </div>
    <div class="col-span-12 grid grid-cols-12 gap-4">
        @foreach ($products as $product)
        <div class="col-span-4 bg-white rounded-md p-4">
            <div class="mb-4">
                <img src="{{ asset($product->foto) }}" alt="" class="w-48 h-48 object-cover mx-auto rounded">
            </div>
            <div class="flex justify-between">
                <div class="px-4 flex space-x-2">
                    <div>
                        <p class="font-medium text-xl">Judul :</p>
                        <p class="font-medium text-lg">Harga :</p>
                    </div>
                    <div>
                        <p class="font-medium text-xl">{{ $product->judul }}</p>
                        <p class="font-medium text-lg">{{ $product->harga }}</p>
                    </div>
                </div>
                <div class="flex items-end">
                    <a href="{{ route('product.edit', $product->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded-md">Edit</a>
                </div>
            </div>

        </div>            
        @endforeach
    </div>
    <div class="col-span-12 flex justify-center py-6">
        <a href="{{ route('product.create') }}" class="font-medium px-4 py-2 bg-green-400 text-white rounded-md">Tambah Produk</a>
    </div>
</div>

@endsection

