<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontrak;

class KontrakController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'success',
            'data' => Kontrak::all()
        ], 200);
    }
}
