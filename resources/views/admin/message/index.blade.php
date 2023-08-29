@extends('layouts.app')

@section('title', 'Message')

@section('content')

@include('components.sidebar')

<div class="grid grid-cols-12 p-4 sm:ml-64">
    <div class="col-span-2 mb-4 p-2 text-center text-white bg-gray-700 rounded-md">
        <h1 class="font-semibold text-2xl align-middle">Message</h1>
    </div>
    <div class="col-span-12">
        <div class="relative overflow-x-auto shadow-md sm:rounded-md">
            <div class="grid grid-cols-12 gap-2 bg-white p-4">
                <div class="col-span-12 flex items-center space-x-1 px-4 text-gray-500">
                    <i class="fa-solid fa-message"></i>
                    <p class="text-sm font-bold ">Daftar Pesan</p>
                </div>
                @foreach ($messages as $m)
                <a href="#" class="col-span-12 grid grid-cols-12 align-middle space-x-2 hover:bg-gray-200 px-4 py-2 rounded-lg overflow-hidden">
                    <p class="font-medium col-span-3">{{ $m->name }}</p>
                    <div class="col-span-7 flex space-x-1">
                        <div>
                            <p class="font-medium truncate overflow-hidden">{{ $m->subject }}</p>                                                        
                        </div>
                        <p class="truncate text-gray-500">- {{ $m->letter }}</p>                        
                    </div>
                    <div class="col-span-2 flex items-center justify-end">
                        <p class="font-medium text-sm">{{ $m->created_at->format('F d') }}</p>
                    </div>
                </a>                    
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection