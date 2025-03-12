<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'order_date' => 'required|date',
            'status' => 'required|string'
        ]);

        Order::create([
            'user_id' => $request->user_id,
            'order_date' => $request->order_date,
            'status' => $request->status
        ]);

        return redirect()->route('orders.index')->with('success', 'Order created');
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'order_date' => 'required|date',
            'status' => 'required|string'
        ]);

        $order->update([
            'user_id' => $request->user_id,
            'order_date' => $request->order_date,
            'status' => $request->status
        ]);

        return redirect()->route('orders.index')->with('success', 'Order updated');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted');
    }
}
