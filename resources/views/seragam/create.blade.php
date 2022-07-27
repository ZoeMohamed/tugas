@extends('layouts.default')


@section('content')
<section>
    <div class="container mt-4">
        <h1>Tambah Seragam</h1>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{url('seragam/store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="jenis_seragam">Jenis Seragam</label>
                        <input for="jenis_seragam" type="text" class="form-control" name="jenis_seragam" placeholder="Seragam Pramuka"></label>
                    </div>
                    <div class="form-group">
                        <label for="ukuran">Ukuran Seragam</label>
                        <input for="ukuran" type="text" class="form-control" name="ukuran" placeholder="XXL"></label>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Seragam</label>
                        <input for="harga" type="number" class="form-control" name="harga" placeholder="9000"></label>
                    </div>

                    <div class="form-group mt-2">
                       <button type="submit" class="form-control btn btn-primary">Tambah Seragam</button>
                    </div>

                    <div class="form-group mt-2">
                       <a href="{{url('/seragam')}}">
                           Kembali Ke halaman Utama
                       </a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection