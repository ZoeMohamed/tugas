@extends('layouts.default')


@section('content')
<section>
    <div class="container mt-4">
        <h1>Tambah Siswa</h1>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{url('siswa/store')}}" method="POST">
                    @csrf
                    <div class="form-group mt-4">
                        <label for="nama">Nama Siswa</label>
                        <input for="nama" type="text" class="form-control" name="nama" placeholder="Zoe Mohamed" required></label>
                    </div>
                    <div class="form-group mt-4">
                        <label for="kelas">Kelas</label>
                        <select name="kelas" class="form-control" required>
                            <option selected disabled value="">Pilih Kelas</option>

                            <option value="XII-RPL">XII-RPL</option>
                            <option value="XII-OTKP">XII-OTKP</option>
                            <option value="XII-BDP">XII-BDP</option>
                            <option value="XII-AKL">XII-AKL</option>
                            <option value="XI-RPL">XI-RPL</option>
                            <option value="XI-OTKP">XI-OTKP</option>
                            <option value="XI-BDP">XI-BDP</option>
                            <option value="XI-AKL">XI-AKL</option>
                            <option value="X-RPL">X-RPL</option>
                            <option value="X-OTKP">X-OTKP</option>
                            <option value="X-BDP">X-BDP</option>
                            <option value="X-AKL">X-AKL</option>
                   
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <label for="nis">NIS</label>
                        <input for="nis" type="number" class="form-control" name="nis" placeholder="12096" required></label>
                    </div>

                    <div class="form-group mt-4">
                       <button type="submit" class="form-control btn btn-secondary">Tambah Siswa</button>
                    </div>

                    <div class="form-group mt-2">
                       <a href="{{url('/siswa')}}" class='link-success'>
                           Kembali Ke halaman Utama
                       </a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection