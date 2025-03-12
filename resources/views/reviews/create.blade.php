@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Review</h1>

    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Product ID</label>
            <input type="number" name="product_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">User ID</label>
            <input type="number" name="user_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Review</label>
            <textarea name="review" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Rating</label>
            <select name="rating" class="form-select" required>
                <option value="1">1 Star</option>
                <option value="2">2 Stars</option>
                <option value="3">3 Stars</option>
                <option value="4">4 Stars</option>
                <option value="5">5 Stars</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Create Review
        </button>
    </form>
</div>
@endsection
