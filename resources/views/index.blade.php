@extends('layouts.default')


@section('content')
<section>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <h1>Crud Laravel</h1>
           <a href="{{url('/create')}}" class="btn btn-primary">Tambah siswa</a>
        </div>


        <div class="col-lg-8 mt-4">
           <table class="table table-bordered">
               <tr>
                   <th>No</th>
                   <th>Nama</th>
                   <th>Kelas</th>
                   <th>NIS</th>
                   <th>Action</th>
               </tr>

               @foreach($datas as $data)
<tr>
               <td>
    {{$loop->iteration}}
               </td>

               <td>
    {{$data->nama}}
               </td>

               <td>
    {{$data->kelas}}
               </td>

               <td>
    {{$data->nis}}
               </td>

               <td>
                   <a href="{{url('/show/'.$data->id)}}" class="btn btn-warning">Edit</a>
                   <a href="{{url('/destroy/'.$data->id)}}" class="btn btn-danger">Delete</a>
               </td>

</tr>
               @endforeach
           </table>
        </div>
    </div>
</div>
</section>

@endsection