@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Order</h1>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">User ID</label>
            <input type="number" name="user_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Order Date</label>
            <input type="date" name="order_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">
            Create Order
        </button>
    </form>
</div>
@endsection
