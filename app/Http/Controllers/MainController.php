<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $products = Product::get();
        $categories = Category::get();
        return view('index', compact('categories', 'products'));
    }

    public function category($code)
    {
        $categories = Category::get();
        $category = Category::where('code', $code)->first();
        return view('category', compact('category', 'categories'));
    }

    public function product($category, $productCode = null)  {
        $products = Product::get();
        $categories = Category::get();
        $product = Product::where('code', $productCode)->first();
        return view('product', compact('categories', 'productCode', 'category', 'products', 'product'));
    }
}
