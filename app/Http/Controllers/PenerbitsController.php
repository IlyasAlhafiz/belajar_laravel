<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penerbit;
use RealRashid\SweetAlert\Facades\Alert;

class PenerbitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerbit = Penerbit::all();
        return view('penerbit.index', compact('penerbit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penerbit.create');
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
            'nama_penerbit' => 'required|max:255',
        ],
        [
            'nama_penerbit.required' => 'Nama Produk Harus Diisi',
            'nama_penerbit.max' => 'Nama Produk Max 1 Karakter',
        ]
    );

        $penerbit = new Penerbit;
        $penerbit->nama_penerbit = $request->nama_penerbit;
        $penerbit->save();

        Alert::success('Hore!', 'Data Berhasil Ditambahkan');
        return redirect()->route('penerbit.index')->with('success', 'Data Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        return view('penerbit.show', compact('penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        return view('penerbit.edit', compact('penerbit'));
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
        $penerbit = Penerbit::findOrFail($id);
        $penerbit->nama_penerbit = $request->nama_penerbit;
        $penerbit->save();
        
        Alert::success('Hore!', 'Data Berhasil Diubah');
        return redirect()->route('penerbit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        $penerbit->delete();

        Alert::success('Hore!', 'Data Berhasil Dihapus');
        return redirect()->route('penerbit.index')->with('success', 'Data Berhasil Dihapus.');
    }
}
