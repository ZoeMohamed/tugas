@extends('layouts.default')


@section('content')
<section>
    <div class="container mt-4">
        <h1>Tambah Mahasiswa</h1>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{url('/update/'. $data->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Siswa</label>
                        <input for="nama" type="text" class="form-control" name="nama" placeholder="Zoe Mohamed" value="{{$data->nama}}"></label>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input for="kelas" type="text" class="form-control" name="kelas" placeholder="XII RPL" value="{{$data->kelas}}"></label>
                    </div>
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input for="nis" type="number" class="form-control" name="nis" placeholder="12096" value="{{$data->nis}}"></label>
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