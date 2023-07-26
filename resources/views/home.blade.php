@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(auth()->user()->is_admin == 1)
                    <a href="{{url('admin/routes')}}">Admin</a>
                    @else
                    <div class=”panel-heading”>Normal User</div>
                    @endif
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
