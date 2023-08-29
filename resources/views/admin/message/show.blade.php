@extends('layouts.app')

@section('title', 'Show Message')

@section('content')

@include('components.sidebar')

<div class="grid grid-cols-12 p-4 sm:ml-64">
    <div class="col-span-2 mb-4 p-2 text-center text-white bg-gray-700 rounded-md">
        <h1 class="font-semibold text-2xl align-middle">Message</h1>
    </div>
    <div class="col-span-12 grid grid-cols-12 gap-4 bg-white rounded-lg p-4">
        <div class="col-span-12">
            <p class="text-xl font-medium px-12">{{ $message->subject }}</p>
        </div>
        <div class="col-span-12 space-y-1">
            <p class="font-medium text-sm">Dari : {{ $message->name }}</p>
            <p class="font-medium text-sm">Email : {{ $message->email }}</p>
            <p class="font-medium text-sm">Phone : {{ $message->phone }}</p>            
        </div>
        <div class="col-span-12">
            <p class="indent-8 font-medium">{{ $message->letter }}</p>
        </div>
        <div class="col-span-12 flex justify-end items-center">
            <a class="text-sm font-medium text-white px-4 py-2 rounded-md bg-blue-500" href="{{ route('message.index') }}">Tutup</a>
        </div>
    </div>
</div>

@endsection