<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ProductsFilterRequest;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {

//        if($request->all())
//        dd($request->all());
//        dump($request->all());
        $productsQuery = Product::query();
        if($request->filled('price_from'))
        {
            $productsQuery->where('price', '>=', $request->price_from);
        }
        if($request->filled('price_to'))
        {
            $productsQuery->where('price', '<=', $request->price_to);
        }
        foreach(['hit', 'new', 'recommend'] as $field)
        {
            if($request->has($field))
            {
                $productsQuery->$field();
            }
        }
        $products = $productsQuery->paginate(6)->withPath("?" . $request->getQueryString());
        return view('index', compact('products'));
    }

    public function categories()
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }
    public function product($category, $code)
    {
        $product = Product::byCode($code)->first();
        return view('product', compact('product'));
    }


}
