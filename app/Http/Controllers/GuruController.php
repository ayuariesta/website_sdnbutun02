<?php

namespace App\Http\Controllers;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $data_guru = \App\Models\Guru::where('nama', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
            $data_guru = \App\Models\Guru::all();
        }
        return view('guru.index',compact('data_guru'));
    }

    public function create(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:7',
            'email' => 'required|email|unique:users',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);
        //masukkan ke tabel user
        $user = new \App\Models\User;
        $user->role = 'guru';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('guruku');
        $user->save();

        //masukkan data guru
        $request->request->add(['user_id' => $user->id]);
        $guru = \App\Models\Guru::create($request->all());
        if($request->hasFile('profile')){
            $request->file('profile')->move('images/', $request->file('profile')->getClientOriginalName());
            $guru->profile = $request->file('profile')->getClientOriginalName();
            $guru->save();
        }
        return redirect('/guru')->with('sukses', 'Penambahan data berhasil');
    }

    public function edit($id){
        $guru = \App\Models\Guru::find($id);
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, $id){
        $guru = \App\Models\Guru::find($id);
        $guru->update($request->all());
        if($request->hasFile('profile')){
            $request->file('profile')->move('images/', $request->file('profile')->getClientOriginalName());
            $guru->profile = $request->file('profile')->getClientOriginalName();
            $guru->save();
        }
        return redirect('/guru')->with('sukses', 'Update data berhasil');
    }

    public function delete($id){
        $guru = \App\Models\Guru::find($id);
        $guru->delete();
        return redirect('/guru')->with('sukses', 'Delete data berhasil');
    }

    public function profile($id){
        $guru = \App\Models\Guru::find($id);
        $pelajaran = \App\Models\Mapel::all();
        return view('guru.profile', compact('guru', 'pelajaran'));
    }
}
