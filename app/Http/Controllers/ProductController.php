<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $filename = 'img-' . time() . '.' . $foto->extension();
        $foto->storeAs('public/img/product', $filename);
        $fotoUrl = '/storage/img/product/' . $filename;

        Product::create([
            'foto' => $fotoUrl,
            'judul' => $request->input('judul'),
            'harga' => $request->input('harga'),
        ]);

        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($request->hasFile('foto')) {
            // Hapus gambar lama
            Storage::delete($product->foto);

            $foto = $request->file('foto');
            $filename = 'img-' . time() . '.' . $foto->extension();
            $foto->storeAs('public/img/product', $filename);
            $fotoUrl = '/storage/img/product/' . $filename;
        } else {
            $fotoUrl = $product->foto;
        }

        $product->update([
            'foto' => $fotoUrl,
            'judul' => $request->input('judul'),
            'harga' => $request->input('harga'),
        ]);

        return redirect()->route('product.index');
    }
}
