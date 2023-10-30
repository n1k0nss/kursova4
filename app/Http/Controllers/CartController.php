<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Mail;
use App\Mail\OrderMail;

class CartController extends Controller
{
    public function cart(){
        $products = Product::all();
        $categories = Category::all();
        $orderId = session('orderId');
        $order = Order::with('products')->find($orderId);


        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }

        return view('site.pages.cart.index', compact('categories', 'products', 'order'));
    }

    public function mail(Request $request){
        $products = Product::all();
        $orderId = session('orderId');
        $order = Order::with('products')->find($orderId);

        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }
        $mailData = [
            'products' => $products,
            'orderId' => $orderId,
            'order' => $order,
            'tel' => $request->input('phone_number'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];

        Mail::to($request->input('email'))->send(new OrderMail($mailData));

    }

    public function cartAdd($productId){
        $orderId = session('orderId');
        $order = Order::findOrNew($orderId);

        if (!$order->id) {
            $order->save();
            session(['orderId' => $order->id]);
        }


        if($order->products->contains($productId)){
                $PivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
                $PivotRow->count++;
                $PivotRow->update();
            } else{
                $order->products()->syncWithoutDetaching([$productId => ['count' => 1]]);
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

    public function cartDetach($productId) {
        $orderId = session('orderId');
        $order = Order::find($orderId);

        $order->products()->detach($productId);

        return redirect()->route('cart');
    }
}
