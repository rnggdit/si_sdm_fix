<?php

namespace App\Http\Controllers;

use App\Models\Pengembangan;
use App\Models\Pegawai;
use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PengembanganController extends Controller
{
    public function index(){
        $pengembangan = Pengembangan::with('pegawai','pendidikan')->latest()->paginate(10);
        return view('pengembangan',compact(['pengembangan']));
    }

    public function create()
    {
        $peg = Pegawai::all();
        $pend = Pendidikan::all();
        return view('insert.pengembangan-tambah',compact('peg','pend'));
    }

    public function store(Request $request)
    {
        Pengembangan::create([
            'pegawai_id' => $request->pegawai_id,
            'pendidikan_id' => $request->pendidikan_id,
            'nama_pengembangan' => $request->nama_pengembangan,
        ]);

        return redirect('/pengembangan');
    }

    public function edit($id_pengembangan)
    {
        $peg = Pegawai::all();
        $pend = Pendidikan::all();
        $pengembangan = Pengembangan::find($id_pengembangan);   
        return view('update.pengembangan-edit',compact(['pengembangan','peg','pend']));
    }

    public function update($id_pengembangan, Request $request)
    {
        $pengembangan = Pengembangan::find($id_pengembangan);
        $pengembangan->update($request->except(['_token','submit']));
        return redirect('/pengembangan');
    }

    public function delete($id_pengembangan)
    {
        $pengembangan = Pengembangan::find($id_pengembangan);
        return view('delete.pengembangan-hapus',compact(['pengembangan']));
    }

    public function destroy($id_pengembangan)
    {
        $pengembangan = Pengembangan::find($id_pengembangan);
        $pengembangan->delete();
        return redirect('/pengembangan');

    }
}
