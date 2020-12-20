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

        <img src="{{asset('admin/assets/img/SDN.png')}}" class="rounded mx-auto d-block" alt="..." width="15%"><br>
        <div class="judul text-dark"><h2>Fasilitas Sekolah</h2></div>
        <br><br>
        <div class="cardperpus mb-1 text-dark bg-info" style="max-width: 700px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="{{asset('images/perpustakaan.jpg')}}" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Perpustakaan</h5>
                <p class="card-text">Perpustakaan yang disediakan oleh sekolah ini dimanfaatkan siswa dengan baik sehingga siswa mudah menerima materi dari guru.</p>
                <p class="card-text"><small class="text-muted">Update by Ayu Ariesta</small></p>
            </div>
            </div>
        </div>
        </div>
        <div class="cardkantin mb-1 text-light bg-danger" style="max-width: 700px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="{{asset('images/kantin.jpg')}}" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Kantin</h5>
                <p class="card-text">Kantin merupakan salah satu tempat yang digemari para siswa dan guru saat istirahat
                    berlangsung. Disini tersedia berbagai makanan mulai dari camilan hingga makanan berat.</p>
                <p class="card-text"><small class="text-light">Update by Ayu Ariesta</small></p>
            </div>
            </div>
        </div>
        </div>
        <div class="cardkelas mb-1 text-dark bg-secondary" style="max-width: 700px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="{{asset('images/kelas.jpg')}}" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Kelas</h5>
                <p class="card-text">Kelas di sekolah ini dibuat senyaman mungkin agar para siswa tidak 
                jenuh dalam menerima materi pelajaran dari bapak/ibu guru</p>
                <p class="card-text"><small class="text-light">Update by Ayu Ariesta</small></p>
            </div>
            </div>
        </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>