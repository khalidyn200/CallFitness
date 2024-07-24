<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {        
        $products = Product::with('category')->get(); 
        return view('dashboard', compact('products'));
    }
    
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'pictures' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('pictures')) {
            $data['pictures'] = $request->file('pictures')->store('images', 'public');
        }

        Product::create($data);

        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'pictures' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        $product = Product::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('pictures')) {
            if ($product->pictures) {
                Storage::disk('public')->delete($product->pictures);
            }
            $data['pictures'] = $request->file('pictures')->store('images', 'public');
        }

        $product->update($data);

        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->pictures) {
            Storage::disk('public')->delete($product->pictures);
        }
        $product->delete();
        return redirect()->route('dashboard');
    }
}