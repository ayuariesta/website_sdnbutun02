@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Berita</h3>
                        </div>
                        <div class="panel-body">
                        <form action="/berita/{{$berita->id}}/update" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="fore-group">
                                <label for="exampleInputEmail1" class="form-label">Judul </label>
                                <input value="{{$berita->judul}}" name="nama" type="text" class="form-control" id="exampleInputEmail1" 
                                aria-describedby="emailHelp" placeholder="Judul Berita">
                            </div>
                            <div class="form-floating">
                                <label for="floatingTextarea2">Gambar</label>
                                <input value="{{$berita->gambar}}" type="file" name="gambar" class="form-control">
                            </div>
                            <div class="form-floating">
                                <label for="floatingTextarea2">Deskripsi Berita</label>
                                <textarea name="berita" class="form-control" placeholder="Masukkan deskripsi" id="floatingTextarea2" style="height: 100px">{{$berita->deskripsi}}</textarea>
                            </div>
                            <br>

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
@stop
