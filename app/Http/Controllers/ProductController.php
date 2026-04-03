<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\Favorite;
use Illuminate\Routing\Controller\HasMiddleware;
use Illuminate\Routing\Controller\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller 
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
      $products = Product::take(7)->get();
      $newProduct = Product::latest()->take(5)->get();
      $favorites = Favorite::where('user_id', Auth::id())->pluck('product_id');
      $wishlist = Product::whereIn('id', $favorites)->get();
      return view('pages.home', compact('products', 'newProduct', 'wishlist', 'favorites'));
    }

    public function products(){
       $products = Product::all();
       return response()->json($products);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product, $category)
    {
        //
         $favorite = Favorite::where('user_id', Auth::id())
        ->where('product_id', $product)
        ->first();

    if ($favorite) {
        $favorite->delete(); // unlike
    } else {
        Favorite::create([
            'user_id' => Auth::id(),
            'product_id' => $product
        ]);
    }

        $sortedByCategory = Product::where('category', $category)->get();

        return view('pages.category_page', compact('sortedByCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

   public function search(Request $request){
    $request->validate([
        'search' => 'required'
    ]);
    $search = $request->search;
    $sortedByCategory = Product::where('name', 'LIKE', "%{$search}%")->get();
    return view('pages.category_page', compact('sortedByCategory', 'search'));
   }
   public function product_details($id){
        $product = Product::find($id);
        $suggestions = Product::latest()->take(4)->get();
        $favorite = Favorite::where('user_id', Auth::id())->where('product_id', $id)->exists();
        return view('pages.product_detail', compact('product','suggestions', 'favorite'));
   }
}
