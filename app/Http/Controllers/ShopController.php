<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show($category)
    {
        $validCategories = ['Cake', 'Sourdough Bread', 'Stuffed Bread', 'Beverages'];
        
        if (!in_array($category, $validCategories)) {
            abort(404);
        }

        $products = Product::where('category', $category)
                          ->orderBy('created_at', 'desc')
                          ->get();

        return view('shop.category', compact('products', 'category'));
    }
}