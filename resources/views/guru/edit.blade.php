@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Data Guru</h3>
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                    </div>
                    @endif
				</div>
				<div class="panel-body">
                <form action="/guru/{{$guru->id}}/update" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}

                        <div class="fore-group">
                            <label for="exampleInputEmail1" class="form-label">Nama </label>
                            <input value="{{$guru->nama}}" name="nama" type="text" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" placeholder="Nama Lengkap">
                        </div>

                        <div class="fore-group">
                            <label for="exampleInputEmail1" class="form-label">Email </label>
                            <input value="{{$guru->user_id}}" name="email" type="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email">
                        </div>

                        <div class="fore-group">
                            <label for="exampleInputEmail1" class="form-label">Telepon</label>
                            <input value="{{$guru->telepon}}" name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nomor telepon">
                        </div>
                        <br>
                        <div class="form-floating">
                        <label for="floatingTextarea2">Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Masukkan alamat" id="floatingTextarea2" style="height: 100px">{{$guru->alamat}}</textarea>
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
