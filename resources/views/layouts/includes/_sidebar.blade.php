<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
				@if(auth()->user()->role == 'admin')
				<li><a href="/guru" class=""><i class="lnr lnr-user"></i> <span>Guru</span></a></li>
				<li><a href="/siswa" class=""><i class="lnr lnr-user"></i> <span>Siswa</span></a></li>
				<li><a href="/mapel" class=""><i class="lnr lnr-bookmark"></i> <span>Mata Pelajaran</span></a></li>
				<li><a href="/berita" class=""><i class="lnr lnr-pencil"></i> <span>Berita</span></a></li>
				@endif
				@if(auth()->user()->role == 'guru')
				<li><a href="/siswa" class=""><i class="lnr lnr-user"></i> <span>Siswa</span></a></li>
				@endif
			</ul>
		</nav>
	</div>
</div>
