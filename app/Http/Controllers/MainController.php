<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $products = Product::get();
        $categories = Category::get();
        $order = Order::find(session('orderId'));
        return view('site.pages.home.index', compact('categories', 'products', 'order'));
    }

    public function category($code)
    {
        $categories = Category::get();
        $category = Category::where('code', $code)->first();
        return view('site.pages.catalog.index', compact('category', 'categories'));
    }

    public function product($category, $productCode = null)  {
        $products = Product::get();
        $categories = Category::get();
        $product = Product::where('code', $productCode)->first();
        return view('site.pages.product.index', compact('categories', 'productCode', 'category', 'products', 'product'));
    }
}
