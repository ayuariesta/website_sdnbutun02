<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css" />
    <title>Home</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand"><h3>SDN Butun 02</h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/profile">Profil</a>
                </li>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/fasilitas">Fasilitas</a>
                </li>
            </ul>

            <form class="d-flex">
                <a class="btn btn-info btn-lg" href="/login" role="button">Login</a>
            </form>
            </div>
        </div>
        </nav>

        <img src="{{asset('admin/assets/img/SDN.png')}}" class="rounded mx-auto d-block" alt="..." width="15%">
        <div class="card" style="width: 20rem;">
            <p class="card-title"><strong>VISI</strong></p>
            <div class="card-body">
                <p class="card-text">” MEWUJUDKAN SISWA – SISWI YANG BERPRESTASI, BERIMAN DAN BERTAQWA 
                    KEPADA TUHAN YANG MAHA ESA SERTA CINTA TERHADAP LINGKUNGAN. ”</p>
            </div>
        </div>
        <br>
        <div class="card-2">
        <div class="card white bg-secondary mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><strong>MISI</strong></h5>
                <p class="card-text" style="color: rgb(0,0,0)">
                        <li>Mewujudkan/menciptakan siswa yang taat beribadah</li>
                        <li>Membentuk sikap dan prilaku yang baik, santun, sopan dan berkarakter.</li>
                        <li>Mewujudkan siswa/i yang disiplin</li>
                        <li>Menciptakan suasana Pembelajaran yang aktif, inovatif, kreatif, efektif,  menyenangkan, gembira dan berbobot</li>
                        <li>Mewujudkan siswa yang berprestasi</li>
                        <li>Mewujudkan suasana kekeluargaan antar warga sekolah</li>
                        <li>Mewujudkan sekolah hijau (Green School).</li>
                </p>
            </div>
            </div>
        </div>
        </div>
        </div>
        <div class="card3 text-dark bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Profil Sekolah</div>
        <div class="card-body">
            <h5 class="card-title">Nama dan Alamat</h5>
            <p class="card-text">SDN Butun 02 </p>
            <p>Jl. Ki Hajar Dewantara Mbaos - Butun</p>
        </div>
        </div>
        
                
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>