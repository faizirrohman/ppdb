<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>{{ $title ?? 'No Title' }}</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
      <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
              {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/admin/home') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('admin.daftar.index') }}">Daftar</a>
                  </li>
                </ul>
              </div>
              <div class="dropdown">
                  <a class="btn btn-secondary dropdown-toggle text-white d-flex align-items-center" href="#" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="pr-4 font-13 font-w400">Noer Faizir Rohman</div>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editProfile"><i class="kejar-profile"></i> Ganti Foto Profil</a>
                        </li>
                        <li>
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#updatePassword"><i class="kejar-password"></i> Ganti Password</a>
                        </li>
                        <li>
                              <a class="dropdown-item" href="http://localhost:8000" data-toggle="modal" data-target="#logout"><i class="kejar-log-out"></i> Log Out</a>
                        </li>
                  </ul>
                </div>
            </div>
      </nav>

      @yield('content')
</body>
</html>