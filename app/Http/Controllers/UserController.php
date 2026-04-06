<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Models\Product;
use App\Models\Favorite;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Middleware\AdminMiddleware;
class UserController extends Controller 
{
    public function __construct(){
        $this->middleware('admin')->only([
            'showOrders',
            'dashboard',
            'updateProduct',
            'removeProduct',
            'totalRevenue',
            'updateOrderInformation'
            ]);
    }
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

    public function addToCart($id)
    {
        // Sends the products in cart
         if(!Auth::check()){
            return view('auth.login');
        }
        $user = Auth::user();
        $product = Product::find($id);
          if (!$product) {
        return response()->json([
            'message' => 'Product not found'
        ], 404);
    }
        $cart = Cart::where('user_id', $user->id)->where('product_id', $id)->first();
        if($cart){
            $cart->increment('quantity');
        }else{
        $insertToCart = Cart::create([ 'user_id' => $user->id,
        'product_id'=>  $product->id,
        'quantity' => 1,
        'status' => 'in progress']);
        }
         return redirect()->back();
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
    //    if(!Auth::check()){
    //      return view('auth.login');
    //    }
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $validated['image'] = $request->file('image')->store('products', 'public');
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
    //       if(!Auth::check() && !$request->user()isAdmin()){
    //     return response()->json([
    //         'message' => 'Unauthorized'
    //     ], 403);
    //    }
       return view('layouts.admin');
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
        $validated['image'] = $request->file('image')->store('products', 'public');
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
        return redirect()->json([
            'message' => 'Item Removed'
        ]);
    }
    public function removeItemInCart($id){
      $cart = Cart::where('id', $id)->delete();
      return response()->route('cart');
    }
//!--------------------------------------------------PUT UPDATE ORDER INFORMATION--------------------------------------------------
    public function updateOrderInformation(Request $request){
        // if(Auth::attempt($request->only('email', 'password'))){
        // $user = Auth::user();
        // if(user()->isAdmin())
        // }
    }
        public function profile(){
            if(!Auth::check()){
                return redirect()->route('login');
            }
            $user = Auth::user();
            $cart = Cart::where('user_id', Auth::id())->get();
            $product_ids = $cart->pluck('product_id');
            $favorites = Favorite::where('user_id', Auth::id())->pluck('product_id');
            $wishlist = Product::whereIn('id', $favorites)->get();
            $product = Order::where('id', Auth::id())->get();
          
            return view('pages.profile_content', compact('user', 'cart', 'product', 'wishlist'));
        }
        
  public function showCartPage(){
    if(!Auth::check()){
        return redirect()->route('login');
    }
    // Get cart items
    $cart = Cart::where('user_id', Auth::id())->get();
    $product_ids = $cart->pluck('product_id');
    if($cart->isEmpty()) {
        return view('pages.cart_page', compact('cart'));
    }
    // Get products + match quantities
    $products = Product::whereIn('id', $product_ids)->get();
    // FIXED: Total = price × matching cart quantity
      $total = 0;
    foreach ($products as $product) {
        $cartItem = $cart->firstWhere('product_id', $product->id);
        $quantity = $cartItem->quantity ?? 1;
        $total += $product->price * $quantity;
        
    }
    //ADD PRICE FOR EACH PRODUCT TOTAL
    
    return view('pages.cart_page', compact('cart', 'products', 'total'));
}

    public function increase($id){
    $cart = Cart::findOrFail($id);
    $cart->quantity += 1;
    $cart->save();

    return back();
}

public function decrease($id){
    $cart = Cart::findOrFail($id);

    if($cart->quantity > 1){
        $cart->quantity -= 1;
        $cart->save();
    }

    return back();
}

public function remove($id){
    Cart::findOrFail($id)->delete();
    return back();
}

    private function getSectionPage($section){
        return match($section){
            'best-seller' , 'featured'=> 'home',
            default => null
        };
    }
    public function navigate($section){
        $page = $this->getSectionPage($section);
        if(!$page){
            return redirect()->route('login');
        }
        return redirect(route($page) . '#' . $section);
    }

}
