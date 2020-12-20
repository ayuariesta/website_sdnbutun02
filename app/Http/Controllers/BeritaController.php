<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $data_berita = \App\Models\Berita::where('nama', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
            $data_berita = \App\Models\Berita::all();
        }
        return view('berita.index',compact('data_berita'));
    }

    public function create(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:7',
            'email' => 'required|email|unique:users',
            'gambar' => 'required',
        ]);

        //masukkan data berita
        $berita = \App\Models\Berita::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $berita->gambar = $request->file('gambar')->getClientOriginalName();
            $berita->save();
        }
        return redirect('/berita')->with('sukses', 'Penambahan data berhasil');
    }

    public function edit($id){
        $berita = \App\Models\Berita::find($id);
        return view('berita.edit', compact('berita'));
    }

    public function update(Request $request, $id){
        $berita = \App\Models\Berita::find($id);
        $berita->update($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $berita->gambar = $request->file('gambar')->getClientOriginalName();
            $berita->save();
        }
        return redirect('/berita')->with('sukses', 'Update data berhasil');
    }

    public function delete($id){
        $berita = \App\Models\Berita::find($id);
        $berita->delete();
        return redirect('/berita')->with('sukses', 'Delete data berhasil');
    }

    public function gambar($id){
        $berita = \App\Models\Berita::find($id);
        return view('berita.profile', compact('berita'));
    }
}
