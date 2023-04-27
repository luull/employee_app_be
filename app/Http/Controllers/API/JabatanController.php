<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'success',
            'data' => Jabatan::all()
        ], 200);
    }
}
