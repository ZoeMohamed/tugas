@extends('layouts.default')


@section('content')
<section>
    <div class="container mt-4">
        <h1>Tambah Siswa</h1>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{url('/store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Siswa</label>
                        <input for="nama" type="text" class="form-control" name="nama" placeholder="Zoe Mohamed"></label>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input for="kelas" type="text" class="form-control" name="kelas" placeholder="XII RPL"></label>
                    </div>
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input for="nis" type="number" class="form-control" name="nis" placeholder="12096"></label>
                    </div>

                    <div class="form-group mt-2">
                       <button type="submit" class="form-control btn btn-primary">Tambah Siswa</button>
                    </div>

                    <div class="form-group mt-2">
                       <a href="{{url('/')}}">
                           Kembali Ke halaman Utama
                       </a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection