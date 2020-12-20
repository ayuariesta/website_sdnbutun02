@extends('layouts.master')

@section('header')

<link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
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
        <img src="{{$berita->getGambar()}}" width="60%" alt="">
        <br><br>
        <div class="text-center"><a href="/berita/{{$berita->id}}/edit" class="btn btn-warning">Edit Berita</a></div>
    </div>
    <div class="profile-stat">
        <div class="row">
            

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
        <div class="panel col-md-8">
			<div class="panel-heading">
					<h3 class="panel-title"><strong><h2>{{$berita->judul}}<h2></strong></h3>
			</div>
				<div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 stat-item">
                        <h4>{{$berita->deskripsi}}</h4><span></span>
                        </div>	
                    </div>	
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

@section('footer')
<script src="https://code.jquery.com/jquery-2.0.3.min.js"></script> 
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script type="text/javascript">
</script>
@stop