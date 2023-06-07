<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Pegawai;
use App\Models\Tunjangan;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index(){
        $gaji = Gaji::with('pegawai','tunjangan')->latest()->paginate(10);
        return view('gaji',compact(['gaji']));
    }

    public function cetakGaji(){
        $gaji = Gaji::with('pegawai','tunjangan')->get();
        return view('cetak.gaji-cetak',compact(['gaji']));
    }

    public function create()
    {
        $peg = Pegawai::all();
        $tun = Tunjangan::all();
        return view('insert.gaji-tambah',compact('peg','tun'));
    }

    public function store(Request $request)
    {
        Gaji::create([
            'pegawai_id' => $request->pegawai_id,
            'tunjangan_id' => $request->tunjangan_id,
            'jumlah_gaji' => $request->jumlah_gaji,
            'total_gaji' => $request->total_gaji,
            'tanggal_gaji' => $request->tanggal_gaji,
        ]);

        return redirect('/gaji');
    }

    public function edit($id_gaji)
    {
        $peg = Pegawai::all();
        $tun = Tunjangan::all();
        $gaji = Gaji::find($id_gaji);   
        return view('update.gaji-edit',compact(['gaji','peg','tun']));
    }

    public function update($id_gaji, Request $request)
    {
        $gaji = Gaji::find($id_gaji);
        $gaji->update($request->except(['_token','submit']));
        return redirect('/gaji');
    }

    public function delete($id_gaji)
    {
        $gaji = Gaji::find($id_gaji);
        return view('delete.gaji-hapus',compact(['gaji']));
    }

    public function destroy($id_gaji)
    {
        $gaji = Gaji::find($id_gaji);
        $gaji->delete();
        return redirect('/gaji');

    }
}
