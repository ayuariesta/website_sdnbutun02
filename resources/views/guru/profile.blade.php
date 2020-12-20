@extends('layouts.master')

@section('header')
@stop
@section('content')
<div class="main">

<!-- MAIN CONTENT -->
<div class="main-content">
    <div class="container-fluid">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger" role="alert">
        {{session('sukses')}}
        </div>
        @endif
<div class="panel panel-profile">
<div class="clearfix">
<!-- LEFT COLUMN -->
<div class="profile-left">

<!-- PROFILE HEADER -->
<div class="profile-header">
    <div class="overlay"></div>
    <div class="profile-main">
        <img src="{{$guru->getProfile()}}" width="30%" class="img-circle" alt="">
        <h3 class="name">{{$guru->nama}}</h3>
        <span class="online-status status-available">Available</span>
    </div>
    <div class="profile-stat">
        <div class="row">
        <h4 class="heading">Biodata</h4>
            <div class="col-md-4 stat-item">
            <span>NIP</span>
            {{$guru->id}}
            </div>
            <div class="col-md-4 stat-item">
            <span>Nomor Telepon</span>
            {{$guru->telepon}}
            </div>
            <div class="col-md-4 stat-item">
            <span>Alamat</span>
            {{$guru->alamat}}
            </div>
        </div>
        <br>
    <br>
    <div class="text-center">
        <a href="/guru/{{$guru->id}}/edit" class="btn btn-warning">Edit Profile</a>
        <br>
    </div>
    </div>
</div>
<!-- END PROFILE HEADER -->

<!-- PROFILE DETAIL -->
<div class="profile-detail">    
</div>
<!-- END PROFILE DETAIL -->
</div>
<!-- END LEFT COLUMN -->
<!-- RIGHT COLUMN -->
<div class="profile-right">
        <div class="panel">
			<div class="panel-heading">
					<h3 class="panel-title">Mata Pelajaran</h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Semester</th>
                        </tr>
						</thead>
						<tbody>
                            @foreach($guru->mapel as $mapel)
							<tr><td>{{$mapel->kode}}</td>
                                <td>{{$mapel->nama}}</td>
                                <td>{{$mapel->semester}}</td>
                            </tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
        </div>    

<!-- END RIGHT COLUMN -->
</div>
</div>
    </div>
</div>
<!-- END MAIN CONTENT -->
</div>
@stop