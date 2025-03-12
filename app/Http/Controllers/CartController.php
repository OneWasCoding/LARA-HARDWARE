<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::all();
        return view('carts.index', compact('cartItems'));
    }

    public function show(Cart $cart)
    {
        return view('carts.show', compact('cart'));
    }

    public function create()
    {
        return view('carts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer'
        ]);

        Cart::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity
        ]);

        return redirect()->route('carts.index')->with('success', 'Cart item created');
    }

    public function edit(Cart $cart)
    {
        return view('carts.edit', compact('cart'));
    }

    public function update(Request $request, Cart $cart)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer'
        ]);

        $cart->update([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity
        ]);

        return redirect()->route('carts.index')->with('success', 'Cart item updated');
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('carts.index')->with('success', 'Cart item deleted');
    }
}
