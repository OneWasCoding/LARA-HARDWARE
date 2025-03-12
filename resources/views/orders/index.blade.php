@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Orders</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->order_date }}</td>
                <td>{{ $order->status }}</td>
                <td>
                    <a href="{{ route('orders.show', $order) }}" class="btn btn-sm btn-primary">
                        View
                    </a>
                    <a href="{{ route('orders.edit', $order) }}" class="btn btn-sm btn-secondary">
                        Edit
                    </a>
                    <form action="{{ route('orders.destroy', $order) }}" method="POST" class="d-inline">
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

    <a href="{{ route('orders.create') }}" class="btn btn-primary">
        Create New Order
    </a>
</div>
@endsection
