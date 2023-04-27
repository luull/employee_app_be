<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;
class PegawaiController extends Controller
{
    public function index()
    {
        $data = Pegawai::with('jabatan','kontrak')->get();
        return response()->json([
            'message' => 'success',
            'data' => $data
        ],200);
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'nama' => ['string', 'required', 'max:25'],
            'jab_id' => 'required',
            'kon_id' => 'required',
        ]);
        $rslt = Pegawai::create([
            'nama' => $request->nama,
            'jab_id' => $request->jab_id,
            'kon_id' => $request->kon_id,
        ]);

        if ($rslt) {
            return response()->json([
                'message' => 'success',
                'data' => $rslt,
            ]);
        } else {
            return response()->json([
                'message' => 'failed',
            ]
        );
        }
    }
    public function find(Request $request)
    {
        $rslt = Pegawai::where('id', $request->id)->first();
        if ($rslt) {
            return response()->json([
                'message' => 'success',
                'data' => $rslt,
            ]);
        } else {
            return response()->json([
                'message' => 'failed',
            ]
        );
        }
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => ['string', 'required', 'max:25'],
            'jab_id' => 'required',
            'kon_id' => 'required',
        ]);
        $rslt = Pegawai::where('id', $id)->update([
            'nama' => $request->nama,
            'jab_id' => $request->jab_id,
            'kon_id' => $request->kon_id,
        ]);

        if ($rslt) {
            return response()->json([
                'message' => 'success',
                'data' => $rslt,
            ]);
        } else {
            return response()->json([
                'message' => 'failed',
            ]
        );
        }
    }
    public function delete(Request $request, $id)
    {
        $rslt = Pegawai::where('id', $id)->delete();
        if ($rslt) {
            return response()->json([
                'message' => 'success',
                'data' => $rslt,
            ]);
        } else {
            return response()->json([
                'message' => 'failed',
            ]
        );
        }
    }
}
