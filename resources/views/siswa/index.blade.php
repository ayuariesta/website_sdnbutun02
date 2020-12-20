@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h2 class="panel-title">Data Siswa</h2>
                                <div class="right">
                                <button type="button" class="btn"  data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>NISN</th>
                                            <th>NAMA</th>
                                            <th>KELAS</th>
                                            <th>JENIS KELAMIN</th>
                                            <th>AGAMA</th>
                                            <th>ALAMAT</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_siswa as $siswa)
                                        <tr>
                                            <td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->id}}</a></td>
                                            <td>{{$siswa->nama}}</td>
                                            <td>{{$siswa->kelas}}</td>
                                            <td>{{$siswa->jenis_kelamin}}</td>
                                            <td>{{$siswa->agama}}</td>
                                            <td>{{$siswa->alamat}}</td>
                                            <td>
                                                <a href="/siswa/{{$siswa->id}}/delete" class= "btn btn-danger btn-sm" onclick="return confirm('Apakah yakin dihapus?')">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                <div class="modal-body">
                    <form action="/siswa/create" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="fore-group{{$errors->has('nama') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1" class="form-label">Nama </label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{old('nama')}}">
                            @if($errors->has('nama'))
                                <span class="help-block">{{$errors->first('nama')}}</span>
                            @endif
                        </div>

                        <div class="fore-group{{$errors->has('email') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}">
                            @if($errors->has('email'))
                                <span class="help-block">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        
                        <div class="fore-group{{$errors->has('kelas') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1" class="form-label">Kelas </label>
                            <input name="kelas" type="text" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" placeholder="Masukkan kelas" value="{{old('kelas')}}">
                            @if($errors->has('kelas'))
                                <span class="help-block">{{$errors->first('kelas')}}</span>
                            @endif
                        </div>

                        <div class="fore-group{{$errors->has('jenis_kelamin') ? ' has-error' : ''}}">
                            <label for="exampleFormSelect1" class="form-label">Jenis Kelamin </label><br>
                            <select name="jenis_kelamin" class="form-select" aria-label="Default select example"
                            >
                            <option value="L"{{(old('jenis_kelamin') == 'L') ? '  selected' : ''}}>Laki-laki</option>
                            <option value="P"{{(old('jenis_kelamin') == 'P') ? '  selected' : ''}}>Perempuan</option>
                            </select>
                            @if($errors->has('jenis_kelamin'))
                                <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
                            @endif
                        </div>

                        <div class="fore-group{{$errors->has('agama') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1" class="form-label">Agama</label>
                            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" placeholder="Masukkan agama" value="{{old('agama')}}">
                        @if($errors->has('agama'))
                            <span class="help-block">{{$errors->first('agama')}}</span>
                        @endif
                        </div>
                        <br>
                        <div class="form-floating">
                            <label for="floatingTextarea2">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukkan alamat" 
                            id="floatingTextarea2" style="height: 100px" value="{{old('alamat')}}"></textarea>
                        </div>
                        <br>
                        <div class="form-floating{{$errors->has('profile') ? ' has-error' : ''}}">
                        <label for="floatingTextarea2">Foto Profile</label>
                        <input type="file" name="profile" class="form-control">
                        @if($errors->has('profile'))
                            <span class="help-block">{{$errors->first('profile')}}</span>
                        @endif
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
@stop
