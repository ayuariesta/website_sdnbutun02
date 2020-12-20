@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Edit Mata Pelajaran</h3>
				</div>
				<div class="panel-body">
                <form action="/mapel/{{$mapel->id}}/update" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                        <div class="fore-group">
                            <label for="exampleInputEmail1" class="form-label">Nama </label>
                            <input value="{{$mapel->nama}}" name="nama" type="text" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" placeholder="Nama Lengkap">
                        </div>
                        <div class="fore-group">
                        <label for="exampleFormSelect1" class="form-label">ID Guru </label><br>
                        <select name="guru_id" class="form-select" aria-label="Default select example">
                            @foreach($data_guru as $guru)
                            <option value="<?=$guru->id?>"><?=$guru->nama?></option>
                            @endforeach
                        </select>
                        </div>

                        <div class="fore-group">
                            <label for="exampleInputEmail1" class="form-label">Kode </label>
                            <input value="{{$mapel->kode}}" name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan kelas">
                        </div>

                        <div class="fore-group">
                            <label for="exampleInputEmail1" class="form-label">Semester</label>
                            <input value="{{$mapel->semester}}" name="semester" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan agama">
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