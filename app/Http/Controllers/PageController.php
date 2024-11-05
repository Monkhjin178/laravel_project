<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.index', compact('products'));
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){
        // Corrected validation rule
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'price' => 'required|integer',
            'description' => 'required|string|max:255',
            'slug' => 'required|string|max:55',
        ]);

        // Create a new product
        Product::query()->create([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'slug' => $validatedData['slug'],
        ]);

        return redirect()->route('index')
            ->with('success', 'Product created successfully');
    }

    public function edit($id)
    {
        $product = Product::query()->find($id);
        return view('admin.edit', compact('product'));  // Fixed view name here too (was missing a dot)
    }

    public function update(Request $request, $id){
        // Corrected validation rule
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'price' => 'required|integer|max:200',
            'description' => 'required|string|max:255',  // Corrected here
            'slug' => 'required|string|max:55',
        ]);

        // Find and update the product
        $product = Product::query()->find($id);
        $product->update([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'slug' => $validatedData['slug'],
        ]);

        return redirect()->route('index')->with('message', 'Product Updated Successfully');
    }
}
