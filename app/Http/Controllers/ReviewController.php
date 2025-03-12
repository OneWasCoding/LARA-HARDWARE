<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'user_id' => 'required|integer',
            'review' => 'required|string',
            'rating' => 'required|integer|between:1,5'
        ]);

        Review::create([
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
            'review' => $request->review,
            'rating' => $request->rating
        ]);

        return redirect()->route('reviews.index')->with('success', 'Review created');
    }

    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'user_id' => 'required|integer',
            'review' => 'required|string',
            'rating' => 'required|integer|between:1,5'
        ]);

        $review->update([
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
            'review' => $request->review,
            'rating' => $request->rating
        ]);

        return redirect()->route('reviews.index')->with('success', 'Review updated');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index')->with('success', 'Review deleted');
    }
}
