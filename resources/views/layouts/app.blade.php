<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @stack('prepend-style')
    <link rel="stylesheet" href="{{url('frontend/libraries/bootstrap/css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend/styles/main.css')}}">
    @stack('addon-style')
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar py-2 navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="frontend/images/bunayya.png" width="40" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">   
            @if(auth()->user()->role == 'siswa')
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link align-self-center mr-3" href="/home">Home</a>
                    <a class="nav-item nav-link align-self-center mr-3" href="/siswa/jadwal">Jadwal Mapel</a>
                    <a class="nav-item nav-link align-self-center mr-3" href="/siswa/nilai">Nilai</a>
                    <a class="nav-item nav-link align-self-center mr-3" href="/siswa/profile">Profile</a>
                    <a href="/logout" class="btn btn-primary get-started">Keluar</a>
                </div>
            @endif

            @if(auth()->user()->role == 'guru')
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link align-self-center mr-3" href="/home">Home</a>
                    <a class="nav-item nav-link align-self-center mr-3" href="/guru/jadwal">Jadwal Mapel</a>
                    <a class="nav-item nav-link align-self-center mr-3" href="/guru/profile">Profile</a>
                    <a href="/logout" class="btn btn-primary get-started">Keluar</a>
                </div>
            @endif

            @if(auth()->user()->role == 'kepala_sekolah')
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link align-self-center mr-3" href="/home">Home</a>
                    <a class="nav-item nav-link align-self-center mr-3" href="/kepalasekolah/siswa">Siswa</a>
                    <a class="nav-item nav-link align-self-center mr-3" href="/kepalasekolah/guru">Guru</a>
                    <a class="nav-item nav-link align-self-center mr-3" href="/kepalasekolah/jadwalmapel">Jadwal</a>
                    <a href="/logout" class="btn btn-primary get-started">Keluar</a>
                </div>
            @endif
            </div>
        </div>
    </nav>
    
    {{-- Main --}}
    @yield('content')

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center pt-4 pb-4">
            <div class="col-auto text-gray-500 font-weight-light text-center">
                &copy; SD IT Bunayya 2020
            </div>
        </div>
    </div>

    @stack('prepend-script')
    <script src="{{url('frontend/libraries/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{url('frontend/libraries/bootstrap/js/bootstrap.js')}}"></script>
    @stack('addon-script')
</body>
</html>