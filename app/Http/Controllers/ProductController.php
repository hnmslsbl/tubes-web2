<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = \App\Models\Admin::paginate(6)->withQueryString();
        $categories = \App\Models\categories::all();
        return view("admin.index", compact("products", "categories"));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = \App\Models\categories::all();
        return view("admin.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Merek' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:20480',
            'Harga' => 'required|numeric',
            'Processor' => 'required|string|max:255',
            'Layar' => 'required|string|max:255',
            'Memori' => 'required|string|max:255',
            'Deskripsi' => 'required|string',
            'category_id' => 'required|integer',
        ]);

        // Upload gambar dan simpan path-nya
        $imagePath = $request->file('image')->store('images/products', 'public');
        $imageFileName = basename($imagePath);

        \App\Models\Admin::create([
            'Merek' => $validatedData['Merek'],
            'Foto' => $imageFileName,
            'Harga' => $validatedData['Harga'],
            'Processor' => $validatedData['Processor'],
            'Layar' => $validatedData['Layar'],
            'Memori' => $validatedData['Memori'],
            'Deskripsi' => $validatedData['Deskripsi'],
            'categories_id' => $validatedData['category_id'],
        ]);
        //    return dd($validatedData);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Admin::findOrFail($id);
        return view('user.detail', compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = \App\Models\categories::all();
        return view('admin.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
