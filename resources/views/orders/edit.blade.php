@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Order</h1>

    <form action="{{ route('orders.update', $order) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">User ID</label>
            <input type="number" name="user_id" class="form-control" value="{{ $order->user_id }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Order Date</label>
            <input type="date" name="order_date" class="form-control" value="{{ $order->order_date }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" value="{{ $order->status }}" required>
        </div>

        <button type="submit" class="btn btn-primary">
            Update Order
        </button>
    </form>
</div>
@endsection
