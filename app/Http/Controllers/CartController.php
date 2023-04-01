<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(){
        $products = Product::get();
        $categories = Category::get();

        $orderId = session('orderId');

        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }

        return view('cart', compact('categories', 'products', 'order'));
    }

    public function CartAdd($productId){
        $orderId = session('orderId');

        if(is_null($orderId)){
            $order = Order::create()->id;
            session(['orderId' => $order->id]);
        } else{
            $order = Order::find($orderId);
        }


        if($order->products->contains($productId)){
                $PivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
                $PivotRow->count++;
                $PivotRow->update();
            } else{
                $order->products()->attach($productId);
            }
        return redirect()->route('cart');

        }





    public function cartRemove($productId){

        $orderId = session('orderId');
        $order = Order::find($orderId);

        if(is_null($orderId)){
            return redirect()->route('cart');
        }

        $order = Order::find($orderId);

        if($order->products->contains($productId)){
            $PivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if($PivotRow->count < 2){
                $order->products()->detach($productId);
            } else{
                $PivotRow->count--;
                $PivotRow->update();
        }
        }

        return redirect()->route('cart');
    }
}
