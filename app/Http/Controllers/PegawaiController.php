<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        $pegawai = Pegawai::all();
        return view('pegawai',compact(['pegawai']));
    }

    public function cetakPegawai(){
        $pegawai = Pegawai::all();
        return view('cetak.pegawai-cetak',compact(['pegawai']));
    }

    public function create()
    {
        return view('insert.pegawai-tambah');
    }

    public function store(Request $request)
    {
        Pegawai::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nomor_handphone' => $request->nomor_handphone,
            'jabatan' => $request->jabatan,
        ]);

        return redirect('/pegawai');
    }

    public function edit($id_pegawai)
    {
        $pegawai = Pegawai::find($id_pegawai);   
        return view('update.pegawai-edit',compact(['pegawai']));
    }

    public function update($id_pegawai, Request $request)
    {
        $pegawai = Pegawai::find($id_pegawai);
        $pegawai->update($request->except(['_token','submit']));
        return redirect('/pegawai');
    }

    public function delete($id_pegawai)
    {
        $pegawai = Pegawai::find($id_pegawai);
        return view('delete.pegawai-hapus',compact(['pegawai']));
    }

    public function destroy($id_pegawai)
    {
        $pegawai = Pegawai::find($id_pegawai);
        $pegawai->delete();
        return redirect('/pegawai');

    }
}
