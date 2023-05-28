<?php

namespace App\Http\Controllers\Admin;

use App\Order;

class OrderController
{
    public function index()
    {
        $orders = Order::active()->get();
        return view('auth.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('auth.orders.show', compact('order'));
    }
}
