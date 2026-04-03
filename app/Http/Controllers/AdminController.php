<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Revenue;
class AdminController extends Controller
{
    
//?--------------------------------------------------ADDING PRODUCT [DONE]--------------------------------------------------
public function addProduct(Request $request)
{
      if($request->user()->role !== 'admin'){
        return response()->json([
            'message' => 'Unauthorized'
        ], 403);
       }
    $validated = $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
        'description' => 'required',
        'category' => 'required',
        'stock' => 'required|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('products', 'public');
    }

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
          if(!Auth::check()){
        return response()->json([
                'message' => 'Unauthorized'
        ], 403);
       }
      $products =  Product::all();
       return view('admin.components.dashboard_component', compact('products'));
    }

//?--------------------------------------------------UPDATE PRODUCT [DONE]--------------------------------------------------

public function updateProduct(Request $request, Product $product){
    if($request->user()->role !== 'admin'){
        return response()->json([
            'message' => 'Unauthorized'
        ], 403);
    }

    $validated = $request->validate([
        'name' => 'sometimes|required',
        'price' => 'sometimes|required',
        'description' => 'sometimes|required',
        'stock' => 'sometimes|required',
        'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('products', 'public');
    }

    $product->update($validated);

    return redirect()->back()->with('message', 'Product updated successfully');
}

//?--------------------------------------------------REMOVE PRODUCT [DONE]--------------------------------------------------
    public function removeProduct(Product $product){
    //        if($request->user()->role !== 'admin'){
    //     return response()->json([
    //         'message' => 'Unauthorized'
    //     ], 403);
    //    }
       $product->cart()->delete();
       $product->delete();
       return redirect()->back();
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
        return redirect()->json([
            'message' => 'Item Removed'
        ]);
    }
//!--------------------------------------------------PUT UPDATE ORDER INFORMATION--------------------------------------------------
    public function updateOrderInformation(Request $request){
        // if(Auth::attempt($request->only('email', 'password'))){
        // $user = Auth::user();
        // if(user()->isAdmin())
        // }
    }


}
