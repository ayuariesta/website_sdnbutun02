<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    
    public function index(Request $request){
        if($request->has('cari')){
            $data_siswa = \App\Models\Siswa::where('nama', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
            $data_siswa = \App\Models\Siswa::all();
        }
        return view('siswa.index',compact('data_siswa'));
    }

    public function create(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:7',
            'email' => 'required|email|unique:users',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'profile' => 'mimes:jpg,png'
        ]);
        //masukkan ke tabel user
        $user = new \App\Models\User;
        $user->role = 'siswa';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('ayuariesta');
        $user->save();

        //masukkan data siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = \App\Models\Siswa::create($request->all());
        if($request->hasFile('profile')){
            $request->file('profile')->move('images/', $request->file('profile')->getClientOriginalName());
            $siswa->profile = $request->file('profile')->getClientOriginalName();
            $siswa->save();
        }
        return redirect('/siswa')->with('sukses', 'Penambahan data berhasil');
    }

    public function edit($id){
        $siswa = \App\Models\Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id){
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());
        if($request->hasFile('profile')){
            $request->file('profile')->move('images/', $request->file('profile')->getClientOriginalName());
            $siswa->profile = $request->file('profile')->getClientOriginalName();
            $siswa->save();
        }
        return redirect('/siswa')->with('sukses', 'Update data berhasil');
    }

    public function delete($id){
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete();
        return redirect('/siswa')->with('sukses', 'Delete data berhasil');
    }

    public function profile($id){
        $siswa = \App\Models\Siswa::find($id);
        $pelajaran = \App\Models\Mapel::all();
        return view('siswa.profile', compact('siswa', 'pelajaran'));
    }

    public function addnilai(Request $request,$idsiswa){
        $siswa = \App\Models\Siswa::find($idsiswa);
        if($siswa->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('siswa/' .$idsiswa.'/profile')->with('error', 'Data nilai sudah ada');
        }
        $siswa->mapel()->attach($request->mapel,['nilai' => $request->nilai]);
        return redirect('siswa/'.$idsiswa.'/profile')->with('sukses', 'Update data nilai berhasil');
    }

    public function deletenilai($idsiswa, $idmapel){
        $siswa = \App\Models\Siswa::find($idsiswa);
        $siswa->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Data nilai berhasil dihapus');
    }
}
