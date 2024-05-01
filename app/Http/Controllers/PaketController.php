<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pakets = Paket::all();
        return view('admin.master.paket.index', compact('pakets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.master.paket.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Paket::create(
            [
                'nama' => $request->nama,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
            ]
        );
        // Session::flash('success', 'Data Customer Telah Ditambah.');
        return redirect()->route('admin.master.paket.index');
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
        $paket = Paket::findOrFail($id);
        return view('admin.master.paket.edit', compact('paket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Paket::findOrFail($id)->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi
        ]);
        // Session::flash('success', 'Data Customer Telah Diubah.');
        return redirect()->route('admin.master.paket.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Paket::findOrFail($id)->delete();
        // Session::flash('success', 'Data Customer Telah Dihapus.');
        return redirect()->route('admin.master.paket.index');
    }
}
