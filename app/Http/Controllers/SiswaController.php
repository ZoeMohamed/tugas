<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::all();
        return view('siswa.index')->with([
            "datas" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Siswa::all();
        return view('siswa.create');
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
        
        Siswa::insert($data);
        Alert::success('Success','Data berhasil Ditambahkan');

        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Siswa::findOrFail($id);
        return view('siswa.show')->with([
            "data" => $data
        ]);
    }


    public function search(Request $request){
        $query = '%' . $request->cari . '%';

        $datas = Siswa::where('nama','like',$query)->orWhere('kelas','like',$query)->orWhere('nis','like',$query)->get();
         
        return view('siswa.index',compact("datas"));

    }

    public function sort(Request $request){

        if($request->has('sort_nama') ){
            if ($request->sort_nama == "ASC"){
                $datas = Siswa::orderBy('nama',$request->sort_nama)->get();
                return view('siswa.index',compact("datas"));

                
            }else if($request->sort_nama == "DESC"){
                $datas = Siswa::orderBy('nama',$request->sort_nama)->get();
                return view('siswa.index',compact("datas"));

            } 
        }
        else if($request->has('sort_kelas')){


        }if($request->sort_kelas == "ASC"){
            $datas = Siswa::orderBy('kelas',$request->sort_kelas)->get();
            return view('siswa.index',compact("datas"));

        }else if($request->sort_kelas == "DESC"){
            $datas = Siswa::orderBy('kelas',$request->sort_kelas)->get();
            return view('siswa.index',compact("datas"));

        }

        else if($request->has('sort_nis')){
        }if($request->sort_nis == "ASC"){
            $datas = Siswa::orderBy('nis',$request->sort_nis)->get();
            return view('siswa.index',compact("datas"));

        }else if($request->sort_nis == "DESC"){
            $datas = Siswa::orderBy('nis',$request->sort_nis)->get();
            return view('siswa.index',compact("datas"));

        
        }
    }

    
    public function filter(Request $request){

        if($request->has('filter')){
            $query = $request->filter;
            $datas = Siswa::where('kelas','=',$query)->get();
            return view('siswa.index',compact('datas'));
        }else{
            return view('siswa.index');
        }

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Siswa::findOrFail($id);
        $data = $request->except(['_token']);

        $item->update($data);

        Alert::success('Success','Berhasil Mengedit data');


        return redirect('/siswa');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        
        $data = Siswa::findOrFail($id);


        $data->delete();

        Alert::success('Sucsess','Data berhasil Di hapus');

        return redirect('/siswa');
    }
}
