<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Desa;
use App\Kecamatan;
use DB;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['desa'] = DB::table('desa')
                        ->join('kecamatan', 'desa.kecamatan', '=', 'kecamatan.id')
                        ->select('desa.id', 'desa.desa', 'kecamatan.kecamatan', 'desa.luas', 'desa.kecamatan as id_kecamatan')
                        ->orderBy('kecamatan.kecamatan', 'asc')
                        ->get();
        return view('desa')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kecamatan'] = Kecamatan::all();
        return view('add_data_desa')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
          $desa                 = new Desa;
          $desa->desa           = $request->input("desa");
          $desa->kecamatan      = $request->input("kecamatan");
          $desa->luas           = $request->input("luas");
          $desa->save();
          return redirect("/desa")->with('successMessage', 'Data berhasil ditambahkan!');;
        }

        catch(\Illuminate\Database\QueryException $e)
        {
          return redirect("/desa")->with('errMessage', 'Kode yang disimpan sudah ada dalam database. </br> Harap Coba menggunakan kode yang belum ada');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['kecamatan'] = Kecamatan::all();
        $data['desa']=Desa::find($id);
        return view('edit_desa')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        try
        {
            $desa                 = Desa::find($id);
            $desa->desa           = $request->input("desa");
            $desa->kecamatan      = $request->input("kecamatan");
            $desa->luas           = $request->input("luas");
            $desa->save();
            return redirect("/desa")->with('successMessage', 'Data berhasil diupdate!');;
        }

        catch(\Illuminate\Database\QueryException $e)
        {
            return redirect("/desa")->with('errMessage', 'Kode yang disimpan sudah ada dalam database. </br> Harap Coba menggunakan kode yang belum ada');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->input("id_delete");
        Desa::destroy($id);
        return redirect('/desa');
    }
}
