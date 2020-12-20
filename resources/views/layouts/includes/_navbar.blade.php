<nav class="navbar navbar-default navbar-fixed-top">
	<div class="brand">
		<a href="index.html"><img src="{{asset('admin/logo.png')}}" alt="Butun 02" class="img-responsive logo" ></a>
	</div>
	<div class="container-fluid">
		<div class="navbar-btn">
			<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
		</div>
		<form class="navbar-form navbar-right" method="GET" action="/siswa">
			<div class="input-group">
				<input name="cari" type="text" value="" class="form-control" placeholder="Search siswa">
				<span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
			</div>
		</form>
		<form class="navbar-form navbar-right" method="GET" action="/guru">
			<div class="input-group">
				<input name="cari" type="text" value="" class="form-control" placeholder="Search guru">
				<span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
			</div>
		</form>
		<div id="navbar-menu">
			<ul class="nav navbar-nav navbar-left">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="" class="img-circle" alt=""> 
					<span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
					<ul class="dropdown-menu">
						<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
