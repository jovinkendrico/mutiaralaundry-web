<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Customer;
use App\Models\Paket;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pesanans = Pesanan::all();
        return view('admin.transaksi.pesanan.index', compact('pesanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $customers = Customer::all();
        $pakets = Paket::all();
        $cabangs = Cabang::all();

        return view('admin.transaksi.pesanan.create', compact('customers', 'pakets', 'cabangs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Pesanan::create(
            [
                'tanggal' => $request->tanggal,
                'customer_id' => $request->customer_id,
                'cabang_id' => $request->cabang_id,
                'paket_id' => $request->paket_id,
                'biaya' => $request->biaya,
                'qty' => $request->qty,
            ]
        );
        // Session::flash('success', 'Data Customer Telah Ditambah.');
        return redirect()->route('admin.transaksi.pesanan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $customers = Customer::all();
        $pakets = Paket::all();
        $cabangs = Cabang::all();
        $pesanan = Pesanan::findOrFail($id);
        return view('admin.transaksi.pesanan.edit', compact('customers', 'pakets', 'cabangs', 'pesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Pesanan::findOrFail($id)->update([
            'tanggal' => $request->tanggal,
            'customer_id' => $request->customer_id,
            'cabang_id' => $request->cabang_id,
            'paket_id' => $request->paket_id,
            'biaya' => $request->biaya,
            'qty' => $request->qty,
        ]);
        // Session::flash('success', 'Data Customer Telah Diubah.');
        return redirect()->route('admin.transaksi.pesanan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Pesanan::findOrFail($id)->delete();
        // Session::flash('success', 'Data Customer Telah Dihapus.');
        return redirect()->route('admin.transaksi.pesanan.index');
    }
}
