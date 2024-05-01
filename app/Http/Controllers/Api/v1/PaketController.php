<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    //
    public function index()
    {
        $paket = Paket::all();
        return response()->json(['paket' => $paket]);
    }
}
