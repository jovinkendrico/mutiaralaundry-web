<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $customers = Customer::all();
        return view('admin.master.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.master.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Customer::create(
            [
                'nama' => $request->nama,
                'username' => $request->username,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'password' => $request->password,
            ]
        );
        // Session::flash('success', 'Data Customer Telah Ditambah.');
        return redirect()->route('admin.master.customer.index');
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
        $customer = Customer::findOrFail($id);
        return view('admin.master.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Customer::findOrFail($id)->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        // Session::flash('success', 'Data Customer Telah Diubah.');
        return redirect()->route('admin.master.customer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Customer::findOrFail($id)->delete();
        // Session::flash('success', 'Data Customer Telah Dihapus.');
        return redirect()->route('admin.master.customer.index');
    }
}
