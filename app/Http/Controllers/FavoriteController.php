<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFavoriteRequest;
use App\Http\Requests\UpdateFavoriteRequest;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($productId)
{    
    if(!Auth::check()){
        return view('auth.login');
    }
    $favorite = Favorite::where('user_id', Auth::id())
        ->where('product_id', $productId)
        ->first();

    if ($favorite) {
        $favorite->delete(); // unlike
    } else {
        Favorite::create([
            'user_id' => Auth::id(),
            'product_id' => $productId
        ]);
    }

    return back();
}

    /**
     * Display the specified resource.
     */
    public function show(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFavoriteRequest $request, Favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favorite $favorite)
    {
        //
    }
}
