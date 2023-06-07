<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(){
        $pengguna = User::all();
        return view('pengguna',compact(['pengguna']));
    }

    public function create()
    {
        return view('insert.pengguna-tambah');
    }

    public function edit($id_pengguna)
    {
        $pengguna = User::find($id_pengguna);   
        return view('update.pengguna-edit',compact(['pengguna']));
    }

    public function update($id_pengguna, Request $request)
    {
        $pengguna = User::find($id_pengguna);
        $pengguna->update($request->except(['_token']));
        return redirect('/pengguna');
    }

    public function delete($id_pengguna)
    {
        $pengguna = User::find($id_pengguna);
        return view('delete.pengguna-hapus',compact(['pengguna']));
    }

    public function destroy($id_pengguna)
    {
        $pengguna = User::find($id_pengguna);
        $pengguna->delete();
        return redirect('/pengguna');

    }
}
