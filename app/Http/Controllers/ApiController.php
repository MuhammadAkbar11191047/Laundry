<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;
class ApiController extends Controller
{
    public function test(){
        $daftars = Daftar::all();
        return response()->json(['message' => 'Berhasil','data' => $daftars]);
    }
    public function show($id){
        $daftar = Daftar::find($id);
        return response()->json(['message' => 'Berhasil','data' => $daftar]);
    }
    public function store(Request $request){
        Daftar::create($request->all());
        return response()->json(['message' => 'succes','data' => $daftars]);
    }
}
