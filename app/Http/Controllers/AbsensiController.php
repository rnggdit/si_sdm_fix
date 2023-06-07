<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index(){
        $absensi = Absensi::with('pegawai')->latest()->paginate(10);
        return view('absensi',compact(['absensi']));
    }

    public function cetakAbsensi(){
        $absensi = Absensi::with('pegawai')->get();
        return view('cetak.absensi-cetak',compact(['absensi']));
    }

    public function create()
    {
        $peg = Pegawai::all();
        return view('insert.absensi-tambah',compact('peg'));
    }

    public function store(Request $request)
    {
        Absensi::create([
            'pegawai_id' => $request->pegawai_id,
            'jam_masuk' => $request->jam_masuk,
            'jam_istirahat' => $request->jam_istirahat,
            'tanggal_kerja' => $request->tanggal_kerja,
        ]);

        return redirect('/absensi');
    }

    public function edit($id_absensi)
    {
        $peg = Pegawai::all();
        $absensi = Absensi::with('pegawai')->find($id_absensi);   
        return view('update.absensi-edit',compact(['absensi', 'peg']));
    }

    public function update($id_absensi, Request $request)
    {
        $absensi = Absensi::find($id_absensi);
        $absensi->update($request->except(['_token','submit']));
        return redirect('/absensi');
    }

    public function delete($id_absensi)
    {
        $absensi = Absensi::find($id_absensi);
        return view('delete.absensi-hapus',compact(['absensi']));
    }

    public function destroy($id_absensi)
    {
        $absensi = Absensi::find($id_absensi);
        $absensi->delete();
        return redirect('/absensi');

    }
}
