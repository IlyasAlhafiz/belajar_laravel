<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use RealRashid\SweetAlert\Facades\Alert;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'name_product' => 'required|max:255',
            'merk' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ],
        [
            'name_product.required' => 'Nama Produk Harus Diisi',
            'name_product.max' => 'Nama Produk Max 1 Karakter',
            'merk.required' => 'Merk Harus Diisi',
            'merk.max' => 'Merk Max 255 Karakter',
            'price.required' => 'Harga Harus Diisi',
            'price.numeric' => 'Harga Harus Angka',
            'price.min' => 'Harga Minimal 0',
            'stock.required' => 'Stok Harus Diisi',
            'stock.integer' => 'Stok Harus Angka',
            'stock.min' => 'Stok Minimal 0',
        ]
    );

        $product = new Product;
        $product->name_product = $request->name_product;
        $product->merk = $request->merk;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->picture = $request->picture;
        $product->save();

        Alert::success('Hore!', 'Data Berhasil Ditambahkan');
        return redirect()->route('product.index')->with('success', 'Data Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id)->update($request->all());
        
        Alert::success('Hore!', 'Data Berhasil Diubah');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        Alert::success('Hore!', 'Data Berhasil Dihapus');
        return redirect()->route('product.index')->with('success', 'Data Berhasil Dihapus.');
    }
}
