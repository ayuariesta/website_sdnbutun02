@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h2 class="panel-title">Data Mata Pelajaran</h2>
                                <div class="right">
                                <button type="button" class="btn"  data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>KODE</th>
                                            <th>NAMA</th>
                                            <th>SEMESTER</th>
                                            <th>GURU ID</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_mapel as $mapel)
                                        <tr>
                                            <td>{{$mapel->id}}</a></td>
                                            <td>{{$mapel->kode}}</td>
                                            <td>{{$mapel->nama}}</td>
                                            <td>{{$mapel->semester}}</td>
                                            <td><a href="/guru/{{$mapel->guru_id}}/profile">{{$mapel->guru_id}}<a></td>
                                            <td>
                                                <a href="/mapel/{{$mapel->id}}/edit" class="btn btn-warning btn-sm">Edit Profile</a></div>
                                                <a href="/mapel/{{$mapel->id}}/delete" class= "btn btn-danger btn-sm" onclick="return confirm('Apakah yakin dihapus?')">Delete</a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Data Mata Pelajaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                <div class="modal-body">
                    <form action="/mapel/create" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="fore-group{{$errors->has('kode') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1" class="form-label">Kode </label>
                            <input name="kode" type="text" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" placeholder="Kode Mapel" value="{{old('kode')}}">
                            @if($errors->has('kode'))
                                <span class="help-block">{{$errors->first('kode')}}</span>
                            @endif
                        </div>
                        
                        <div class="fore-group{{$errors->has('nama') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1" class="form-label">Nama </label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" placeholder="Masukkan nama mapel" value="{{old('nama')}}">
                            @if($errors->has('nama'))
                                <span class="help-block">{{$errors->first('nama')}}</span>
                            @endif
                        </div>

                        <div class="fore-group{{$errors->has('semester') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1" class="form-label">Semester</label>
                            <input name="semester" type="text" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" placeholder="Masukkan semester" value="{{old('semester')}}">
                        @if($errors->has('semester'))
                            <span class="help-block">{{$errors->first('semester')}}</span>
                        @endif
                        </div>
                        <br>
                        <div class="fore-group">
                        <label for="exampleFormSelect1" class="form-label">ID Guru </label>
                        <select name="guru_id" class="form-select" aria-label="Default select example">
                            @foreach($data_guru as $guru)
                            <option value="<?=$guru->id?>"><?=$guru->nama?></option>
                            @endforeach
                        </select>
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