<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    //
    public function index()
    {
        $cabang = Cabang::all();
        return response()->json(['cabang' => $cabang]);
    }
}
