<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
//! IF ORDER STATUS IS DONE ADD 1 TO SOLD AND TO REVENUE 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Product $product)
    {
        //
        if(!Auth::check()){
            return view('auth.login');
        }
        $selectedItem = $request->input('selected_items', []);
        if(!$selectedItem){
              return back()->withErrors([
                'message' => 'No product is selected',
            ])->withInput();
        }
       $userCheckOut = Cart::whereIn('id', $selectedItem)->get();
        
        foreach ($userCheckOut as $item){
        Order::create([
            'user_id' => Auth::id(),
            'product_id' => $item->product_id,
            'quantity' => $item->quantity,
            'price' => $item->product->price * $item->quantity,
            'status' => 'pending'
        ]);
        // $product->stock = $product->stock - $item->quantity;
        // $product->save();
        $item->delete();
       
        }
            $user = Auth::user();
            $cart = Cart::where('user_id', Auth::id())->get();
            $product_ids = $cart->pluck('product_id');
            $favorites = Favorite::where('user_id', Auth::id())->pluck('product_id');
            $wishlist = Product::whereIn('id', $favorites)->get();
            $product = Order::where('user_id', Auth::id())->get();
          
            return view('pages.profile_content', compact('user','cart', 'product', 'wishlist'));
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
