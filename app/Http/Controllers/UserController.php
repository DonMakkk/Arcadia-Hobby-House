<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
class UserController extends Controller 
{
    //--------------------------------------------------USER CONTROLLS--------------------------------------------------
    public function index()
    {
        //
    }

    public function store(StoreUserRequest $request, $id)
    {
    // Add items to cart
        if($request->user()){
         $cart = Cart::create(['user_id' => $request->user()->id, 'product_id' => $id]);
        }
    }

    public function show(User $user)
    {
        // Sends the products in cart
         if($request->user()){
            $products = Product::whereIn('product_id', $request->user()->carts()->pluck('product_id'))->get();
        }

    }

    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    public function destroy(User $user, $id)
    {
        // Remove Item From The Cart
        $deleteItemInCart = Cart::where('product_id', $id)->delete();
    }

    //**-------------------------------------------------ADMIN CONTROLLS--------------------------------------------------
//?--------------------------------------------------ADDING PRODUCT [DONE]--------------------------------------------------
    public function addProduct(Request $request){
       if($request->user()->role !== 'admin'){
        return response()->json([
            'message' => 'Unauthorized'
        ], 403);
       }
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $valiated['image'] = $request->file('image')->store('products', 'public');
        Product::create($validated);
        return redirect()->back()->with('message', 'Product added successfully');
    }

//!--------------------------------------------------SHOW ORDERS [IN PROGRESS]--------------------------------------------------
    public function showOrders(Request $request){
         if($request->user()->role !== 'admin'){
        return response()->json([
            'message' => 'Unauthorized'
        ], 403);
       }
       return Cart::all();
    }

//!--------------------------------------------------DASHBOARD PRODUCT [IN PROGRESS]--------------------------------------------------
    public function dashboard(){
          if($request->user()->role !== 'admin'){
        return response()->json([
            'message' => 'Unauthorized'
        ], 403);
       }
       
    }

//?--------------------------------------------------UPDATE PRODUCT [DONE]--------------------------------------------------
    public function updateProduct(Product $product, Request $request){
        if($request->user()->role !== 'admin'){
        return response()->json([
            'message' => 'Unauthorized'
        ], 403);
        }
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $valiated['image'] = $request->file('image')->store('products', 'public');
        $product->update($validated);
        return redirect()->back()->with('message', 'Product updated successfully');
    }

//?--------------------------------------------------REMOVE PRODUCT [DONE]--------------------------------------------------
    public function removeProduct(Product $product){
           if($request->user()->role !== 'admin'){
        return response()->json([
            'message' => 'Unauthorized'
        ], 403);
       }
       $product->delete();
       return redirect()->back()->with('message', 'item removed successfully');
    }
//?--------------------------------------------------PUT PRODUCT TO REVENUE [DONE]--------------------------------------------------
    public function totalRevenue(Request $request){
           if($request->user()->role !== 'admin'){
            return response()->json([
                'message' => 'Unauthorized'
            ], 403);
           }
        $carts = Cart::where('status', 'paid')->sum('price');
        $revenue = Revenue::find(1);
        $revenue->update(
            ['total' => $carts]
            );
        return redirect()->back()->with('message', 'item removed successfully');
    }
}
