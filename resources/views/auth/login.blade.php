@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Login</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">
            Login
        </button>

        <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
    </form>
</div>
@endsection
