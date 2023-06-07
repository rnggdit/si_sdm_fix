<?php

namespace App\Http\Controllers;

use App\Models\Ijin;
use Illuminate\Http\Request;

class IjinController extends Controller
{
    public function index(){
        $ijin = Ijin::all();
        return view('ijin',compact(['ijin']));
    }

    public function create()
    {
        return view('insert.ijin-tambah');
    }

    public function store(Request $request)
    {
        Ijin::create([
            'alasan_ijin' => $request->alasan_ijin,
        ]);

        return redirect('/ijin');
    }

    public function edit($id_ijin)
    {
        $ijin = Ijin::find($id_ijin);   
        return view('update.ijin-edit',compact(['ijin']));
    }

    public function update($id_ijin, Request $request)
    {
        $ijin = Ijin::find($id_ijin);
        $ijin->update($request->except(['_token','submit']));
        return redirect('/ijin');
    }

    public function delete($id_ijin)
    {
        $ijin = Ijin::find($id_ijin);
        return view('delete.ijin-hapus',compact(['ijin']));
    }

    public function destroy($id_ijin)
    {
        $ijin = Ijin::find($id_ijin);
        $ijin->delete();
        return redirect('/ijin');

    }
}
