@extends('resources.views.app')

@section('content')
    @include('resources.views.errors.list')
    <form method="POST" action="/auth/register">
        {!! csrf_field() !!}

        <div class="col-md-6">
            Name
            <input type="text" name="username" value="{{ old('username') }}">
        </div>

        <div>
            Email
            <input type="email" name="email" value="{{ old('email') }}">
        </div>

        <div>
            Password
            <input type="password" name="password">
        </div>

        <div class="col-md-6">
            Confirm Password
            <input type="password" name="password_confirmation">
        </div>

        <div>
            <button type="submit">Register</button>
        </div>
    </form>
@endsection