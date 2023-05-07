<?php

namespace App\Http\Controllers\Admin;

use App\Order;

class OrderController
{
    public function index()
    {
        $orders = Order::where('status', 1)->get();
        return view('auth.orders.index', compact('orders'));
    }
}
