@extends('layouts.default')


@section('content')
<section>
    <div class="container mt-4">
        <h1>Edit Seragam</h1>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{url('seragam/update/'.$data->id)}}" method="POST">
                    @csrf
                    <div class="form-group mt-4">
                        <label for="jenis_seragam">Nama Siswa</label>
                        <input for="jenis_seragam" type="text" class="form-control" name="jenis_seragam"  value="{{$data->jenis_seragam}}"></label>
                    </div>
                    <div class="form-group mt-4">
                        <label for="ukuran">Ukuran</label>
                        <select name="ukuran" class="form-control">
                        <option selected value="{{$data->ukuran}}">{{$data->ukuran}}</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                            <option value="XXXL">XXXL</option>
                   
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <label for="harga">Harga</label>
                        <input for="harga" type="number" value={{$data->harga}} class="form-control" name="harga"></label>
                    </div>

                    <div class="form-group mt-4">
                       <button type="submit" class="form-control btn btn-secondary">Edit Siswa</button>
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