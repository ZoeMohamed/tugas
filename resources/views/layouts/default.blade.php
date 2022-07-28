<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 10</title>

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

</head>
<body>

<div class="container-fluid">
    <div class="row">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="{{url('/siswa')}}">
              <h3>Koperasi</h3>
              </a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link {{(Request::is('siswa*')) ? 'active' : ''}}" aria-current="page" href="{{url("/siswa")}}">
                    <h6>Data Siswa</h6>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{(Request::is('seragam*')) ? 'active' : ''}}" href="{{url("/seragam")}}">
                    <h6>Data Seragam</h6></a>
                  </li>

                  {{-- <li>
                    @if(Request::is('siswa*'))
                    <form class="d-flex" role="search" action="{{url("/siswa/search")}}">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
                      <button class="btn btn-outline-success" type="submit" >Search</button>
                    </form>
                    @elseif(Request::is('seragam*'))
                    <form class="d-flex" role="search" action="{{url("/seragam/search")}}">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
                      <button class="btn btn-outline-success" type="submit" >Search</button>
                    </form>
                    
                    @endif
 
                
                  </li> --}}
                </ul>
              </div>
            </div>
          </nav>
        @stack('before-content')
        @yield('content')
        @stack('after-content')

    </div>
</div>

@stack('before-script')
@yield('includes.script')
@include('sweetalert::alert')

@stack('after-script')

    
</body>
</html>