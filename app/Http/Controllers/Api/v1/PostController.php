<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreRegisterRequest;
use App\Http\Requests\StoreTransaksiRequest;
use App\Models\Customer;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function pesanan(string $id)
    {
        $pesanan = Pesanan::where('customer_id', $id)->with('cabang')->with('paket')->get();
        return response()->json(['data' => $pesanan], 201);
    }
    public function register(StoreRegisterRequest $request)
    {
        try {
            $validatedData = $request->validated();

            // Create a new customer
            $customer = Customer::create($validatedData);

            // Success response
            return response()->json(['message' => 'Customer created successfully', 'error' => false, 'id' => $customer->id], 201);
        } catch (\Exception $e) {
            // Error response
            return response()->json(['message' => 'Failed to create customer', 'error' => true, 'id' => 0], 200);
        }
    }
    public function login(StoreLoginRequest $request)
    {
        try {
            $validatedData = $request->validated();

            // Create a new customer
            $customer = Customer::where('username', $validatedData['username'])->first();

            if ($customer->password == $validatedData['password']) {
                return response()->json(['message' => 'Login Succesful', 'error' => false, 'id' => $customer->id], 201);
            } else {
                return response()->json(['message' => 'Login Failed', 'error' => true, 'id' => 0], 201);

            }

            // Success response

        } catch (\Exception $e) {
            // Error response
            return response()->json(['message' => 'Failed to Login', 'error' => true], 200);
        }
    }
    public function transaksi(StoreTransaksiRequest $request)
    {
        try {
            $validatedData = $request->validated();

            // Success response
            Pesanan::create($validatedData);
            return response()->json(['message' => 'Succesful Create Transaction', 'error' => false], 200);

        } catch (\Exception $e) {
            // Error response
            return response()->json(['message' => 'Failed to create Transaction', 'error' => true], 200);
        }
    }
}

