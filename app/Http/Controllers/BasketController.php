<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function orderPlace()
    {
        $orderId = session('orderId');
        if(is_null($orderId))
            return redirect()->route('index');
        $order = Order::find($orderId);
        return view('order', compact('order'));
    }

    public function orderConfirm(Request $request)
    {
        $orderId = session('orderId');
        if(is_null($orderId))
            return redirect()->route('index');
        $order = Order::find($orderId);
        $success = $order->saveOrder($request->name, $request->phone);
        if($success)
        {
            session()->flash('success', 'Your order has been processed');
        }
        else
        {
            session()->flash('error', 'Error');
        }
        return redirect()->route('index');
    }
    public function basket()
    {
        $orderId = session('orderId');
        if(!is_null($orderId))
        {
            $order = Order::findOrFail($orderId);
            if($order->products->count() > 0)
            {
//              P   session()->forget('warning');
            }
        }
        else
        {
            $order = null;
            session()->flash('warning', 'Ваша корзина пуста');

        }
        return view('basket', compact('order'));
    }

    public function basketAdd($productId)
    {
        $orderId = session('orderId');
        if(is_null(Order::find($orderId)))
        {
            $order = Order::create();
            session(['orderId' => $order->id]);
        }
        else
        {
            $order = Order::find($orderId);
        }
//        return session('orderId');
        if($order->products->contains($productId))
        {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        }
        else
        {
            $order->products()->attach($productId);
        }
        if(Auth::check())
        {
            $order->user_id = Auth::id();
            $order->save();
        }
        $product = Product::find($productId);
        session()->flash('success',  'Product added ' . $product->name);
        return redirect()->route('basket');
    }

    public function basketRemove($productId)
    {
        $orderId = session('orderId');
        if(is_null($orderId))
        {
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);
        if($order->products->contains($productId))
        {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if($pivotRow->count <  2)
            {
                $order->products()->detach($productId);
            }
            else
            {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }
        return redirect()->route('basket');
    }
}
