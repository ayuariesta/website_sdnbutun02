@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Data Siswa</h3>
				</div>
				<div class="panel-body">
                <form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}

                        <div class="fore-group">
                            <label for="exampleInputEmail1" class="form-label">Nama </label>
                            <input value="{{$siswa->nama}}" name="nama" type="text" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" placeholder="Nama Lengkap">
                        </div>

                        <div class="fore-group">
                            <label for="exampleInputEmail1" class="form-label">Email </label>
                            <input value="{{$siswa->user_id}}" name="email" type="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email">
                        </div>

                        <div class="fore-group">
                            <label for="exampleInputEmail1" class="form-label">Kelas </label>
                            <input value="{{$siswa->kelas}}" name="kelas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan kelas">
                        </div>

                        <div class="fore-group">
                        <label for="exampleFormSelect1" class="form-label">Jenis Kelamin </label><br>
                        <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                        <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                        <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                        </select>
                        </div>

                        <div class="fore-group">
                            <label for="exampleInputEmail1" class="form-label">Agama</label>
                            <input value="{{$siswa->agama}}" name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan agama">
                        </div>
                        <br>
                        <div class="form-floating">
                        <label for="floatingTextarea2">Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Masukkan alamat" id="floatingTextarea2" style="height: 100px">{{$siswa->alamat}}</textarea>
                        </div>
                        <br>
                        <div class="form-floating">
                        <label for="floatingTextarea2">Foto Profile</label>
                        <input type="file" name="profile" class="form-control">
                        </div>
                        <br>
                        </div>
                        </div>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-warning">Update</button>
                        </form>
				</div>
			</div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('content1')
        <h1>Edit Data Siswa</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
        @endif
            <div class="row">
                <div class="col-lg-6">
                    <form action="/siswa/{{$siswa->id}}/update" method="POST">
                            {{csrf_field()}}

                        <div class="fore-group">
                            <label for="exampleInputEmail1" class="form-label">Nama </label>
                            <input value="{{$siswa->nama}}" name="nama" type="text" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" placeholder="Nama Lengkap">
                        </div>
                        
                        <div class="fore-group">
                            <label for="exampleInputEmail1" class="form-label">Email </label>
                            <input value="{{$siswa->email}}" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email">
                        </div>

                        <div class="fore-group">
                        <label for="exampleFormSelect1" class="form-label">Jenis Kelamin </label>
                        <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                        <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                        <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                        </select>
                        </div>

                        <div class="fore-group">
                            <label for="exampleInputEmail1" class="form-label">Agama</label>
                            <input value="{{$siswa->agama}}" name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan agama">
                        </div>
                        <br>
                        <div class="form-floating">
                        <textarea name="alamat" class="form-control" placeholder="Masukkan alamat" id="floatingTextarea2" style="height: 100px">{{$siswa->alamat}}</textarea>
                        <label for="floatingTextarea2">Alamat</label>
                        </div>
                        <br>
                        </div>
                        </div>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-warning">Update</button>
                        </form>
                    </div>
                
            </div>
@endsection