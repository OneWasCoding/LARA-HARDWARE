@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Review</h1>

    <form action="{{ route('reviews.update', $review) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Product ID</label>
            <input type="number" name="product_id" class="form-control" value="{{ $review->product_id }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">User ID</label>
            <input type="number" name="user_id" class="form-control" value="{{ $review->user_id }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Review</label>
            <textarea name="review" class="form-control" required>{{ $review->review }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Rating</label>
            <select name="rating" class="form-select" required>
                <option value="1" {{ $review->rating === 1 ? 'selected' : '' }}>1 Star</option>
                <option value="2" {{ $review->rating === 2 ? 'selected' : '' }}>2 Stars</option>
                <option value="3" {{ $review->rating === 3 ? 'selected' : '' }}>3 Stars</option>
                <option value="4" {{ $review->rating === 4 ? 'selected' : '' }}>4 Stars</option>
                <option value="5" {{ $review->rating === 5 ? 'selected' : '' }}>5 Stars</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Update Review
        </button>
    </form>
</div>
@endsection
