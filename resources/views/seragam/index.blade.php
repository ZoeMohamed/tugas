@extends('layouts.default')


@section('content')
<section>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <h1>CRUD Seragam</h1>
           <a href="{{url('/seragam/create')}}" class="btn btn-primary">Tambah Seragam</a>
        </div>


        <div class="col-lg-8 mt-4">
           <table class="table table-bordered">
               <tr>
                   <th>No</th>
                   <th>Jenis Seragam</th>
                   <th>Ukuran Seragam</th>
                   <th>Harga Seragam</th>
                   <th>Action</th>
               </tr>

               @foreach($datas as $data)
<tr>
               <td>
    {{$loop->iteration}}
               </td>

               <td>
    {{$data->jenis_seragam}}
               </td>

               <td>
    {{$data->ukuran}}
               </td>

               <td>
    {{$data->harga}}
               </td>

               <td>
                   <a href="{{url('/seragam/show/'.$data->id)}}" class="btn btn-warning">Edit</a>
                   <a href="{{url('/seragam/destroy/'.$data->id)}}" class="btn btn-danger">Delete</a>
               </td>

</tr>
               @endforeach
           </table>
        </div>
    </div>
</div>
</section>

@endsection