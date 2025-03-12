<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index()
    {
        $orderItems = OrderItem::all();
        return view('order-items.index', compact('orderItems'));
    }

    public function show(OrderItem $orderItem)
    {
        return view('order-items.show', compact('orderItem'));
    }

    public function create()
    {
        return view('order-items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|integer',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer'
        ]);

        OrderItem::create([
            'order_id' => $request->order_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity
        ]);

        return redirect()->route('order-items.index')->with('success', 'Order item created');
    }

    public function edit(OrderItem $orderItem)
    {
        return view('order-items.edit', compact('orderItem'));
    }

    public function update(Request $request, OrderItem $orderItem)
    {
        $request->validate([
            'order_id' => 'required|integer',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer'
        ]);

        $orderItem->update([
            'order_id' => $request->order_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity
        ]);

        return redirect()->route('order-items.index')->with('success', 'Order item updated');
    }

    public function destroy(OrderItem $orderItem)
    {
        $orderItem->delete();
        return redirect()->route('order-items.index')->with('success', 'Order item deleted');
    }
}
