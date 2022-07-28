@extends('layouts.default')

@section('content')


<section>
<div class="container mt-5">
    <div class="row">

        <h1>Manajemen Siswa</h1>

        <div class="col-lg-3 mt-4">
           <a href="{{url('siswa/create')}}" class="btn btn-secondary">
     Tambah Siswa <span>
         <i class="bi bi-plus-lg " style="color:white;"></i>
     </span>
        </a>
        </div>

        <div class="col-lg-3 mt-4 justify-content-center">
            <form action="{{url("/siswa/filter")}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <select class="form-select" aria-label="Filtering" name="filter" class="col-lg-5">
                        <option selected>Filter by Kelas</option>
                            
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
                    
                 <div class="col-lg-2">                    <button class="btn btn-dark" type="submit" class="col-lg-1">Filter</button>
                 </div>
                </div>
                
            </div>
          

        </form>
            
        </div>

    <div class="col-lg-3"></div>
<div class="col-lg-3 mt-4">
    <form class="d-flex" role="search" action="{{url("/siswa/search")}}">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
        <button class="btn btn-outline-dark" type="submit" >Search</button>
      </form></div>
     

        <div class="col-lg-12 mt-3">
           <table class="table table-bordered">
               <tr class="row-black">
                   
                    <th scope="col">No
                   </th>
                   <div class="row">
                    <th scope="col">Nama
                        
                        <form role="sort" action="{{url("/siswa/sort")}}" class="float-left" style="display:inline-block">
                    
                   <button class="btn h-1 col-lg-5" style="padding:1px" name="sort_nama" value="ASC">
                       <i class="bi bi-arrow-up">

                       </i>
                   </button>

                   <button class="btn" style="padding:1px" name="sort_nama" value="DESC">
                    <i class="bi bi-arrow-down">

                    </i>
                </button>

            </form>
                    
                   </div>
                </th>
                <div class="row">
                    <th scope="col">Kelas
                           
                        <form role="sort" action="{{url("/siswa/sort")}}" class="float-left" style="display:inline-block">
                    
                   <button class="btn h-1" style="padding:1px" name="sort_kelas" value="ASC">
                       <i class="bi bi-arrow-up">

                       </i>
                   </button>

                   <button class="btn" style="padding:1px" name="sort_kelas" value="DESC">
                    <i class="bi bi-arrow-down">

                    </i>
                </button>

            </form>
                    
                   </div>
                </th>
                   <div class="row">
                    <th scope="col">NIS
                           
                        <form role="sort" action="{{url("/siswa/sort")}}" class="float-left" style="display:inline-block">
                    
                   <button class="btn h-1" style="padding:1px" name="sort_nis" value="ASC">
                       <i class="bi bi-arrow-up">

                       </i>
                   </button>

                   <button class="btn" style="padding:1px" name="sort_nis" value="DESC">
                    <i class="bi bi-arrow-down">

                    </i>
                </button>

            </form>
                    
                   </div>
                </th>
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
                   <a href="{{url('/siswa/show/'.$data->id)}}" class="btn btn-success text-white">Edit</a>
                   <a href="{{url('/siswa/destroy/'.$data->id)}}" class="btn btn-danger">Delete</a>
               </td>

</tr>
               @endforeach
           </table>
        </div>
    </div>
</div>
</section>

@endsection