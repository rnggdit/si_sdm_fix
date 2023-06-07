<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index(){
        $pendidikan = Pendidikan::all();
        return view('pendidikan',compact(['pendidikan']));
    }

    public function create()
    {
        return view('insert.pendidikan-tambah');
    }

    public function store(Request $request)
    {
        Pendidikan::create([
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'asal_pendidikan' => $request->asal_pendidikan,
        ]);

        return redirect('/pendidikan');
    }

    public function edit($id_pendidikan)
    {
        $pendidikan = Pendidikan::find($id_pendidikan);   
        return view('update.pendidikan-edit',compact(['pendidikan']));
    }

    public function update($id_pendidikan, Request $request)
    {
        $pendidikan = Pendidikan::find($id_pendidikan);
        $pendidikan->update($request->except(['_token','submit']));
        return redirect('/pendidikan');
    }

    public function delete($id_pendidikan)
    {
        $pendidikan = Pendidikan::find($id_pendidikan);
        return view('delete.pendidikan-hapus',compact(['pendidikan']));
    }

    public function destroy($id_pendidikan)
    {
        $pendidikan = Pendidikan::find($id_pendidikan);
        $pendidikan->delete();
        return redirect('/pendidikan');

    }
}
