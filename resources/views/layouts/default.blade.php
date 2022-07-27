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

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#">SMKN 10</a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url("/siswa")}}">Data Siswa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url("/seragam")}}">Data Seragam</a>
                  </li>
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
@stack('after-script')

    
</body>
</html>