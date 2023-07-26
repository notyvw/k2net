@extends('layouts.app')

@section('content')
<div class="grid grid-cols-12 gap-4 mx-24">
    <div class="flex col-span-12 justify-center items-center min-h-screen">
        <div class="bg-white py-4 px-8 rounded-md">
            <p class="font-semibold text-2xl text-center mb-5">Login</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row mb-3">
                    <label for="email" class="text-base">Email</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="text-base">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="px-6 py-2 text-white bg-blue-500 rounded-md">
                        {{ __('Login') }}
                    </button>
                </div>
                <div class="flex justify-center">
                    <div class="col-md-8 offset-md-4">

                        @if (Route::has('password.request'))
                            <a class="text-sm" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div> --}}
@endsection
