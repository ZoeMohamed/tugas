@extends('layouts.default')

@section('content')


<section>
<div class="container mt-5">
    <div class="row">

        <h1>Manajemen Seragam</h1>

        <div class="col-lg-3 mt-4">
           <a href="{{url('seragam/create')}}" class="btn btn-secondary">
     Tambah Seragam<span>
         <i class="bi bi-plus-lg " style="color:white;"></i>
     </span>
        </a>
        </div>

        <div class="col-lg-3 mt-4 justify-content-center">
            <form action="{{url("/seragam/filter")}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <select class="form-select" aria-label="Filtering" name="filter" class="col-lg-5">
                        <option selected>Filter by Ukuran</option>
                            
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                            <option value="XXXL">XXXL</option>
                          
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
    <form class="d-flex" role="search" action="{{url("/seragam/search")}}">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
        <button class="btn btn-outline-dark" type="submit" >Search</button>
      </form></div>
     

        <div class="col-lg-12 mt-3">
           <table class="table table-bordered">
               <tr class="row-black">
                   
                    <th scope="col">No
                   </th>
                   <div class="row">
                    <th scope="col">Jenis Seragam
                        
                        <form role="sort" action="{{url("/seragam/sort")}}" class="float-left" style="display:inline-block">
                    
                   <button class="btn h-1 col-lg-5" style="padding:1px" name="sort_seragam" value="ASC">
                       <i class="bi bi-arrow-up">

                       </i>
                   </button>

                   <button class="btn" style="padding:1px" name="sort_seragam" value="DESC">
                    <i class="bi bi-arrow-down">

                    </i>
                </button>

            </form>
                    
                   </div>
                </th>
                <div class="row">
                    <th scope="col">Ukuran
                           
                        <form role="sort" action="{{url("/seragam/sort")}}" class="float-left" style="display:inline-block">
                    
                   <button class="btn h-1" style="padding:1px" name="sort_ukuran" value="ASC">
                       <i class="bi bi-arrow-up">

                       </i>
                   </button>

                   <button class="btn" style="padding:1px" name="sort_ukuran" value="DESC">
                    <i class="bi bi-arrow-down">

                    </i>
                </button>

            </form>
                    
                   </div>
                </th>
                   <div class="row">
                    <th scope="col">Harga
                           
                        <form role="sort" action="{{url("/seragam/sort")}}" class="float-left" style="display:inline-block">
                    
                   <button class="btn h-1" style="padding:1px" name="sort_harga" value="ASC">
                       <i class="bi bi-arrow-up">

                       </i>
                   </button>

                   <button class="btn" style="padding:1px" name="sort_harga" value="DESC">
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
    {{$data->jenis_seragam}}
               </td>

               <td>
    {{$data->ukuran}}
               </td>

               <td>
    {{$data->harga}}
               </td>

               <td>
                   <a href="{{url('/seragam/show/'.$data->id)}}" class="btn btn-success text-white">Edit</a>
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