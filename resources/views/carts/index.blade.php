@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Carts</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carts as $cart)
            <tr>
                <td>{{ $cart->id }}</td>
                <td>{{ $cart->user->name ?? 'Guest' }}</td>
                <td>{{ $cart->product->name }}</td>
                <td>{{ $cart->quantity }}</td>
                <td>
                    <a href="{{ route('carts.show', $cart) }}" class="btn btn-sm btn-primary">
                        View
                    </a>
                    <a href="{{ route('carts.edit', $cart) }}" class="btn btn-sm btn-secondary">
                        Edit
                    </a>
                    <form action="{{ route('carts.destroy', $cart) }}" method="POST" class="d-inline">
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

    <a href="{{ route('carts.create') }}" class="btn btn-primary">
        Create New Cart
    </a>
</div>
@endsection
