<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use RealRashid\SweetAlert\Facades\Alert;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        return view('order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();        
        $customer = Customer::all();
        return view('order.create', compact('customer','product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        $order->id_product = $request->id_product;
        $order->qty = $request->qty;
        $order->order_date = $request->order_date;
        $order->id_customer = $request->id_customer;
        $order->save();

        Alert::success('Hore!', 'Data Berhasil Ditambahkan');
        return redirect()->route('order.index')->with('success', 'Data Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        $product = Product::all();
        $customer = Customer::all();
        return view('order.show', compact('order','product','customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $product = Product::all();
        $customer = Customer::all();
        return view('order.edit', compact('order','product','customer'));
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
        $order = Order::findOrFail($id);
        $order->id_product = $request->id_product;
        $order->qty = $request->qty;
        $order->order_date = $request->order_date;
        $order->id_customer = $request->id_customer;
        $order->save();
        
        Alert::success('Hore!', 'Data Berhasil Diubah');
        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        Alert::success('Hore!', 'Data Berhasil Dihapus');
        return redirect()->route('order.index')->with('success', 'Data Berhasil Dihapus.');
    }
}
