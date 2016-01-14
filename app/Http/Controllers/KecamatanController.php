<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kecamatan;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kecamatan']=Kecamatan::all();
        return view('kecamatan')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_data_kecamatan');
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
            $kecamatan = new Kecamatan;
            $kecamatan->kecamatan   = $request->input('kecamatan');
            $kecamatan->luas        = $request->input('luas');
            $kecamatan->save();
            return redirect("/kecamatan")->with('successMessage', 'Data berhasil ditambahkan!');;
        }

        catch(\Illuminate\Database\QueryException $e)
        {
            return redirect("/kecamatan")->with('errMessage', $e);
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
        $data['kecamatan'] = Kecamatan::find($id);
        return view('edit_kecamatan')->with($data);
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
        try
        {
            $kecamatan = Kecamatan::find($id);
            $kecamatan->kecamatan   = $request->input('kecamatan');
            $kecamatan->luas        = $request->input('luas');
            $kecamatan->save();
            return redirect("/kecamatan")->with('successMessage', 'Data berhasil diupdate!');;
        }

        catch(\Illuminate\Database\QueryException $e)
        {
            return redirect("/kecamatan")->with('errMessage', $e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input("id_delete");
        Kecamatan::destroy($id);
        return redirect('/kecamatan');
    }
}
