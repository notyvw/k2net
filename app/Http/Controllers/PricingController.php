<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pricing;

class PricingController extends Controller
{
    public function index()
    {
        $pricing = Pricing::all();
        return view('admin.pricing.index', compact('pricing'));
    }
    
    public function edit($id)
    {
        $pricing = Pricing::select('*')->where('id', $id)->first();
        return view('admin.pricing.edit', compact('pricing'));
    }

    public function update(Request $request, $id){

        // Temukan contact berdasarkan ID
        $pricing = Pricing::findOrFail($id);

        // Update atribut alamat, email, dan kontak
        $pricing->update([
            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'info1' => $request->input('info1'),
            'info2' => $request->input('info2'),
            'info3' => $request->input('info3'),
        ]);

        return redirect()->route('pricing.index');
    }

}
