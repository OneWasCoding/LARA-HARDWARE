@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Users</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('users.show', $user) }}" class="btn btn-sm btn-primary">
                        View
                    </a>
                    <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-secondary">
                        Edit
                    </a>
                    <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('users.create') }}" class="btn btn-primary">
        Create New User
    </a>
</div>
@endsection
