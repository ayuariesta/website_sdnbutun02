<?php

namespace App\Http\Controllers;
use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index(Request $request){
        $data_mapel = \App\Models\Mapel::all();
        $data_guru = \App\Models\Guru::all();
        return view('mapel.index',compact('data_mapel','data_guru'));
    }

    public function create(Request $request){
        $this->validate($request, [
            'kode' => 'required',
            'nama' => 'required',
            'semester' => 'required',
        ]);

        //masukkan data mapel
        $mapel = \App\Models\Mapel::create($request->all());
        return redirect('/mapel')->with('sukses', 'Penambahan data berhasil');
    }

    public function edit($id){
        $mapel = \App\Models\Mapel::find($id);
        $data_guru = \App\Models\Guru::all();
        return view('mapel.edit', compact('mapel','data_guru'));
    }

    public function update(Request $request, $id){
        $mapel = \App\Models\Mapel::find($id);
        $mapel->update($request->all());
        return redirect('/guru')->with('sukses', 'Update data berhasil');
    }

    public function delete($id){
        $mapel = \App\Models\Mapel::find($id);
        $mapel->delete();
        return redirect('/mapel')->with('sukses', 'Delete data berhasil');
    }
}
