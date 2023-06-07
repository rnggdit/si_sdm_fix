<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Pegawai;
use App\Models\Ijin;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index(){
        $pengajuan = Pengajuan::with('pegawai','ijin')->latest()->paginate(10);
        return view('pengajuan',compact(['pengajuan']));
    }

    public function create()
    {
        $peg = Pegawai::all();
        $jin = Ijin::all();
        return view('insert.pengajuan-tambah',compact('peg','jin'));
    }

    public function store(Request $request)
    {
        Pengajuan::create([
            'pegawai_id' => $request->pegawai_id,
            'ijin_id' => $request->ijin_id,
            'tgl_mulaiizin' => $request->tgl_mulaiizin,
            'tgl_selesaiizin' => $request->tgl_selesaiizin,
            'tgl_pengajuan' => $request->tgl_pengajuan,
        ]);

        return redirect('/pengajuan');
    }

    public function edit($id_pengajuan)
    {
        $peg = Pegawai::all();
        $jin = Ijin::all();
        $pengajuan = Pengajuan::find($id_pengajuan);   
        return view('update.pengajuan-edit',compact(['pengajuan','peg','jin']));
    }

    public function update($id_pengajuan, Request $request)
    {
        $pengajuan = Pengajuan::find($id_pengajuan);
        $pengajuan->update($request->except(['_token','submit']));
        return redirect('/pengajuan');
    }

    public function delete($id_pengajuan)
    {
        $pengajuan = Pengajuan::find($id_pengajuan);
        return view('delete.pengajuan-hapus',compact(['pengajuan']));
    }

    public function destroy($id_pengajuan)
    {
        $pengajuan = Pengajuan::find($id_pengajuan);
        $pengajuan->delete();
        return redirect('/pengajuan');

    }
}