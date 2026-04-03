<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $fillable = ['name', 'price', 'category', 'description', 'image', 'stock'];

    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function favorites(){
        return $this->hasMany(Favorite::class);
    }
}
