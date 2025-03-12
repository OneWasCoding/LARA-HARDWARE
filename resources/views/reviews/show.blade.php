@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Review Details</h1>

    <p>ID: {{ $review->id }}</p>
    <p>Product: {{ $review->product->name }}</p>
    <p>User: {{ $review->user->name }}</p>
    <p>Review: {{ $review->review }}</p>

    <a href="{{ route('reviews.index') }}" class="btn btn-secondary">
        Back to Reviews
    </a>
</div>
@endsection
