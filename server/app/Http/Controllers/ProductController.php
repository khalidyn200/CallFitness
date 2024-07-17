<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProductController extends Controller
{
    public function getTopThreeProducts()
    {
        $products = Produit::orderBy('id', 'asc')->take(3)->get();
        return response()->json($products);
    }

    public function getAllProducts()
    {
        $products = Produit::paginate(10);
        return response()->json($products);
    }

    public function getProductById($id)
    {
        $product = Produit::find($id);
        if ($product) {
            return response()->json($product);
        } else {
            return response()->json(['error' => 'Product not found'], 404);
        }
    }
}
