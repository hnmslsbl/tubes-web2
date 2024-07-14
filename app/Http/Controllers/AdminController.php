<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\categories;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
   
    public function create()
    {
        $categories = categories::all();
        return view('admin.create',compact('categories'));
    }

    public function delete($id)
    {
        Admin::destroy($id);
        return redirect('/admin');
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.edit', ['admin' => $admin]);
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);

        $validatedData = $request->validate([
            'Merek' => 'required|string|max:255',
            'Foto' => 'image|mimes:jpg,jpeg,png|max:2048',
            'Harga' => 'required|string',
            'Processor' => 'required|string|max:255',
            'Layar' => 'required|string|max:255',
            'Memori' => 'required|string|max:255',
            'Deskripsi' => 'required|string|max:255',
            'KategoriPengguna' => 'required|string',
        ]);

        // Convert harga to numeric format
        $validatedData['Harga'] = preg_replace('/[^0-9]/', '', $request->Harga);

        if ($request->hasFile('Foto')) {

            \Illuminate\Support\Facades\Storage::delete('public/images/products/'.$admin->image);
            $imagePath=$request->file('Foto')->store('images/products','public');
            $imageFilename=basename($imagePath);
            $validatedData['Foto']=$imageFilename;
        }

        $admin->update($validatedData);

        return redirect('/admin')->with('success', 'Data updated successfully');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Merek' => 'required|string|max:255',
            'Foto' => 'required|image|mimes:jpeg,jpg,png|max:20480',
            'Harga' => 'required|string',
            'Processor' => 'required|string|max:255',
            'Layar' => 'required|string|max:255',
            'Memori' => 'required|string|max:255',
            'Deskripsi' => 'required|string',
            'category_id' => 'integer',
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
            'category_id' => $validatedData['category_id'],
        ]);
        //    return dd($validatedData);
        return redirect()->route('admin.index');
    }
}
