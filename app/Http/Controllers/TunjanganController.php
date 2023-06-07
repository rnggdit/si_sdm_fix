<?php

namespace App\Http\Controllers;

use App\Models\Tunjangan;
use Illuminate\Http\Request;

class TunjanganController extends Controller
{
    public function index(){
        $tunjangan = Tunjangan::all();
        return view('tunjangan',compact(['tunjangan']));
    }

    public function create()
    {
        return view('insert.tunjangan-tambah');
    }

    public function store(Request $request)
    {
        Tunjangan::create([
            'nama_tunjangan' => $request->nama_tunjangan,
            'nilai_tunjangan' => $request->nilai_tunjangan,
        ]);

        return redirect('/tunjangan');
    }

    public function edit($id_tunjangan)
    {
        $tunjangan = Tunjangan::find($id_tunjangan);   
        return view('update.tunjangan-edit',compact(['tunjangan']));
    }

    public function update($id_tunjangan, Request $request)
    {
        $tunjangan = Tunjangan::find($id_tunjangan);
        $tunjangan->update($request->except(['_token','submit']));
        return redirect('/tunjangan');
    }

    public function delete($id_tunjangan)
    {
        $tunjangan = Tunjangan::find($id_tunjangan);
        return view('delete.tunjangan-hapus',compact(['tunjangan']));
    }

    public function destroy($id_tunjangan)
    {
        $tunjangan = Tunjangan::find($id_tunjangan);
        $tunjangan->delete();
        return redirect('/tunjangan');

    }
}
