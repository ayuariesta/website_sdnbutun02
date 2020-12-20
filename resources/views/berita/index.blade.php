@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h2 class="panel-title">Berita</h2>
                            <div class="right">
                            <button type="button" class="btn"  data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Gambar</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_berita as $berita)
                                    <tr>
                                        <td><a href="/berita/{{$berita->id}}/gambar">{{$berita->judul}}</a></td>
                                        <td>{{$berita->gambar}}</td>
                                        <td>{{$berita->deskripsi}}</td>
                                        <td><a href="/berita/{{$berita->judul}}/delete" class= "btn btn-danger btn-sm" onclick="return 
                                        confirm('Apakah yakin dihapus?')">Delete</a></td>
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
                        <h5 class="modal-title" id="exampleModalLabel">Data Mata Pelajaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                    <div class="modal-body">
                    <form action="/berita/create" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="fore-group{{$errors->has('judul') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1" class="form-label">Judul</label>
                            <input name="judul" type="text" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" placeholder="Masukkan judul berita" value="{{old('judul')}}">
                            @if($errors->has('judul'))
                                <span class="help-block">{{$errors->first('judul')}}</span>
                            @endif
                        </div>
                        <div class="form-floating">
                            <label for="floatingTextarea2">Deskripsi</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukkan deskripsi berita" 
                            id="floatingTextarea2" style="height: 100px" value="{{old('deskripsi')}}"></textarea>
                        </div>
                        <br>
                        <div class="form-floating{{$errors->has('gambar') ? ' has-error' : ''}}">
                            <label for="floatingTextarea2">Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                            @if($errors->has('gambar'))
                                <span class="help-block">{{$errors->first('gambar')}}</span>
                            @endif
                        </div>
                        <br>
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
