@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h2 class="panel-title">Data Guru</h2>
                                <div class="right">
                                <button type="button" class="btn"  data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>NIP</th>
                                            <th>NAMA</th>
                                            <th>TELEPON</th>
                                            <th>ALAMAT</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_guru as $guru)
                                        <tr>
                                            <td><a href="/guru/{{$guru->id}}/profile">{{$guru->id}}</a></td>
                                            <td>{{$guru->nama}}</td>
                                            <td>{{$guru->telepon}}</td>
                                            <td>{{$guru->alamat}}</td>
                                            <td>
                                                <a href="/guru/{{$guru->id}}/delete" class= "btn btn-danger btn-sm" onclick="return confirm('Apakah yakin dihapus?')">Delete</a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Data Guru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                <div class="modal-body">
                    <form action="/guru/create" method="POST" enctype="multipart/form-data">
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
                        
                        <div class="fore-group{{$errors->has('telepon') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1" class="form-label">Telepon </label>
                            <input name="telepon" type="text" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" placeholder="Masukkan nomor telepon" value="{{old('telepon')}}">
                            @if($errors->has('telepon'))
                                <span class="help-block">{{$errors->first('telepon')}}</span>
                            @endif
                        </div>

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
