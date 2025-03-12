@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Details</h1>

    <p>ID: {{ $user->id }}</p>
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Role: {{ $user->role }}</p>

    <a href="{{ route('users.index') }}" class="btn btn-secondary">
        Back to Users
    </a>
</div>
@endsection
