<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cabangs = Cabang::all();
        return view('admin.master.cabang.index', compact('cabangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.master.cabang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Cabang::create(
            [
                'nama' => $request->nama,
                'alamat' => $request->alamat,
            ]
        );
        // Session::flash('success', 'Data Customer Telah Ditambah.');
        return redirect()->route('admin.master.cabang.index');
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
        $cabang = Cabang::findOrFail($id);
        return view('admin.master.cabang.edit', compact('cabang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Cabang::findOrFail($id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);
        // Session::flash('success', 'Data Customer Telah Diubah.');
        return redirect()->route('admin.master.cabang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Cabang::findOrFail($id)->delete();
        // Session::flash('success', 'Data Customer Telah Dihapus.');
        return redirect()->route('admin.master.cabang.index');
    }
}
