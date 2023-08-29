@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="grid grid-cols-12 gap-4 bg-blue-500">
    <div class="flex col-span-12 justify-center items-center min-h-screen">
        <div class="bg-white py-4 px-8 rounded-md">
            <p class="font-semibold text-2xl text-center mb-3">Login</p>
            <form method="POST" action="{{ route('login') }}" class="grid grid-cols-2 gap-4">
                @csrf
                <div class="col-span-2">
                    <label for="email" class="text-base">Email</label>
                    <div class="col-md-6 w-72">
                        <input id="email" type="email" class="form-control w-full rounded-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="password" class="text-base">Password</label>

                    <div class="col-md-6 w-72">
                        <input id="password" type="password" class="form-control w-full rounded-sm @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-span-2 flex justify-center mt-3">
                    <button type="submit" class="w-full py-2 text-white bg-blue-500 rounded-full">
                        {{ __('Login') }}
                    </button>
                </div>
                <div class="col-span-2 flex justify-center items-center">
                    <a href="{{ route('register') }}" class="text-sm text-gray-500 hover:text-blue-500">Don't have an Account? Register</a>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
