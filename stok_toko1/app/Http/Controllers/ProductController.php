<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('produk.index', compact('products'));
    }

    public function create()
    {
    return view('produk.create');
    }

    public function store(Request $request){
        $request -> validate([
            'name' => 'required',
            'category' => 'required',
            'stock' => 'required | integer',
            'price' => 'required | integer'
        ]);

        \App\Models\Product::create([
            'name' => $request-> name,
            'category' => $request-> category,
            'stock' => $request-> stock,
            'price' => $request-> price,
        ]);
        return redirect('/produk')->with('success', 'Produk berhasil ditambahkan!');
    }

    
}

