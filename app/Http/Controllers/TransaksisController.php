<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Pembeli;
use App\Models\Buku;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();        
        $pembeli = Pembeli::all();
        return view('transaksi.create', compact('pembeli','buku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi = new Transaksi;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->id_buku = $request->id_buku;
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->save();

        Alert::success('Hore!', 'Data Berhasil Ditambahkan');
        return redirect()->route('transaksi.index')->with('success', 'Data Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $buku = Buku::all();
        $pembeli = Pembeli::all();
        return view('transaksi.show', compact('transaksi','buku','pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $buku = Buku::all();
        $pembeli = Pembeli::all();
        return view('transaksi.edit', compact('transaksi','buku','pembeli'));
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
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->jumlah = $request->jumlah;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->id_buku = $request->id_buku;
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->save();
        
        Alert::success('Hore!', 'Data Berhasil Diubah');
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        Alert::success('Hore!', 'Data Berhasil Dihapus');
        return redirect()->route('transaksi.index')->with('success', 'Data Berhasil Dihapus.');
    }
}
