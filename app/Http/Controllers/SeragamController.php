<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seragam;
use RealRashid\SweetAlert\Facades\Alert;


class SeragamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $data = Seragam::all();
      return view('seragam.index')->with(
          [
              "datas" => $data
          ]
      );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Seragam::all();
        return view('seragam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        Seragam::insert($data);
        Alert::success('Success','Data berhasil Ditambahkan');

        return redirect('/seragam');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Seragam::findOrFail($id);
        return view('seragam.show')->with([
            "data" => $data
        ]);
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function search(Request $request){
        $query = '%' . $request->cari . '%';

        $datas = Seragam::where('jenis_seragam','like',$query)->orWhere('ukuran','like',$query)->orWhere('harga','like',$query)->get();
         
        return view('seragam.index',compact("datas"));

    }

    public function sort(Request $request){

        if($request->has('sort_seragam') ){
            if ($request->sort_seragam == "ASC"){
                $datas = Seragam::orderBy('jenis_seragam',$request->sort_seragam)->get();
                return view('seragam.index',compact("datas"));

                
            }else if($request->sort_seragam == "DESC"){
                $datas = Seragam::orderBy('jenis_seragam',$request->sort_seragam)->get();
                return view('seragam.index',compact("datas"));

            } 
        }
        else if($request->has('sort_ukuran')){


        }if($request->sort_ukuran == "ASC"){
            $datas = Seragam::orderBy('ukuran',$request->sort_ukuran)->get();
            return view('seragam.index',compact("datas"));

        }else if($request->sort_ukuran == "DESC"){
            $datas = Seragam::orderBy('ukuran',$request->sort_ukuran)->get();
            return view('seragam.index',compact("datas"));

        }

        else if($request->has('sort_harga')){
        }if($request->sort_harga == "ASC"){
            $datas = Seragam::orderBy('harga',$request->sort_harga)->get();
            return view('seragam.index',compact("datas"));

        }else if($request->sort_harga == "DESC"){
            $datas = Seragam::orderBy('harga',$request->sort_harga)->get();
            return view('seragam.index',compact("datas"));

        
        }
    }

    public function filter(Request $request){

        if($request->has('filter')){
            $query = $request->filter;
            $datas = Seragam::where('ukuran','=',$query)->get();
            return view('seragam.index',compact('datas'));
        }else{
            return view('seragam.index');
        }

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Seragam::findOrFail($id);
        $data = $request->except(['_token']);

        $item->update($data);

        Alert::success('Success','Data berhasil Diupdate');


        return redirect('/seragam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Seragam::findOrFail($id);

        $data->delete();

        Alert::success('Success','Data Berhasil terhapus');

        return redirect('/seragam');
    }
}
