<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;
class DaftarController extends Controller
{
    public function test() {
        $daftars = Daftar::all();
        
        return view('daftars.test',compact(['daftars']));
    }
    public function create() {
        $daftar = Daftar::all();
        
        return view('daftars.create');
    }
    public function store(Request $request) {
        Daftar::create($request->all());
        return redirect('/daftars');
    }

    public function edit($id) {
        $daftar = Daftar::find($id);
        return view('daftars.edit',compact(['daftar']));
    }

    public function update(Request $request,$id) {
        $daftar = Daftar::find($id);
        $daftar->update($request->all());
        return redirect('/daftars');
    }
    public function hapus($id) {
        $daftar = Daftar::find($id);
        $daftar->delete();
        return redirect('/daftars');
    }


    
}
