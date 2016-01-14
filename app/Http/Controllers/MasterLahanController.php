<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lahan;
use App\Desa;
use App\Kecamatan;
use DB;
use File;

class MasterLahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['lahan'] = Lahan::all();
        return view('master_lahan')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kecamatan'] = Kecamatan::all();
        return view('add_data_lahan')->with($data);
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
          $lahan                    = new Lahan;
          $lahan->jenis             = $request->input("jenis");
          $lahan->kecamatan         = $request->input("kecamatan");
          $lahan->keterangan        = $request->input("keterangan");
          $lahan->tahun             = $request->input("tahun");
          $lahan->kcp2b             = $request->input("kcp2b");
          $lahan->cagar_budaya      = $request->input("cagar_budaya");
          $lahan->lindung_spiritual = $request->input("lindung_spiritual");
          $lahan->hutan_rakyat      = $request->input("hutan_rakyat");
          $lahan->hutan_lindung     = $request->input("hutan_lindung");
          $lahan->industri          = $request->input("industri");
          $lahan->pertanian_tanaman = $request->input("pertanian_tanaman");
          $lahan->hutan_produksi    = $request->input("hutan_produksi");
          $lahan->hutan_produksi_terbatas = $request->input("hutan_produksi_terbatas");
          $lahan->pariwisata        = $request->input("pariwisata");
          $lahan->pertambangan      = $request->input("pertambangan");
          $lahan->tanaman_pangan    = $request->input("tanaman_pangan");
          $lahan->pemukiman_pedesaan= $request->input("pemukiman_pedesaan");
          $lahan->pemukiman_perkotaan = $request->input("pemukiman_perkotaan");
          $lahan->tpa               = $request->input("tpa");
          $lahan->sekitar_waduk     = $request->input("sekitar_waduk");
          $lahan->sekitar_mataair   = $request->input("sekitar_mataair");
          $lahan->sempadan_sungai   = $request->input("sempadan_sungai");

          // file
          $foto                     = $request->file("path_peta");
          $destinationPath          = public_path().'/files/lahan';
          $extension                = $foto->getClientOriginalExtension();
          $filename                 = time()."_".str_random(12).".".$extension;
          $foto->move($destinationPath, $filename);

          $lahan->path_peta         = $filename;

          $lahan->save();
          return redirect("/masterlahan")->with('successMessage', 'Data berhasil ditambahkan!');
          // echo "sukses";
        }

        catch(\Illuminate\Database\QueryException $e)
        {
          return redirect("/masterlahan")->with('errMessage', 'Kode yang disimpan sudah ada dalam database. </br> Harap Coba menggunakan kode yang belum ada');
            // echo "belum";
        }

    }

    public function upload(Request $request)
    {
      $foto                     = $request->file("path_peta");
      $destinationPath          = public_path().'/files/lahan';
      $extension                = $foto->getClientOriginalExtension();
      $filename                 = time()."_".str_random(12).".".$extension;
      $foto->move($destinationPath, $filename);
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
        $data['kecamatan']  = Kecamatan::all();
        $data['lahan']      = Lahan::find($id);
        return view('edit_data_lahan')->with($data);
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
          $lahan                    = Lahan::find($id);
          $lahan->jenis             = $request->input("jenis");
          $lahan->kecamatan         = $request->input("kecamatan");
          $lahan->keterangan        = $request->input("keterangan");
          $lahan->tahun             = $request->input("tahun");
          $lahan->kcp2b             = $request->input("kcp2b");
          $lahan->cagar_budaya      = $request->input("cagar_budaya");
          $lahan->lindung_spiritual = $request->input("lindung_spiritual");
          $lahan->hutan_rakyat      = $request->input("hutan_rakyat");
          $lahan->hutan_lindung     = $request->input("hutan_lindung");
          $lahan->industri          = $request->input("industri");
          $lahan->pertanian_tanaman = $request->input("pertanian_tanaman");
          $lahan->hutan_produksi    = $request->input("hutan_produksi");
          $lahan->hutan_produksi_terbatas = $request->input("hutan_produksi_terbatas");
          $lahan->pariwisata        = $request->input("pariwisata");
          $lahan->pertambangan      = $request->input("pertambangan");
          $lahan->tanaman_pangan    = $request->input("tanaman_pangan");
          $lahan->pemukiman_pedesaan= $request->input("pemukiman_pedesaan");
          $lahan->pemukiman_perkotaan = $request->input("pemukiman_perkotaan");
          $lahan->tpa               = $request->input("tpa");
          $lahan->sekitar_waduk     = $request->input("sekitar_waduk");
          $lahan->sekitar_mataair   = $request->input("sekitar_mataair");
          $lahan->sempadan_sungai   = $request->input("sempadan_sungai");

          // file
          if ($request->hasFile('path_peta')) {

            $destinationPath          = public_path().'/files/lahan';
            
            // delete existing file
            $name = $lahan->path_peta;
            File::delete($destinationPath."/".$name);

            // update photo
            $foto                     = $request->file("path_peta");
            $extension                = $foto->getClientOriginalExtension();
            $filename                 = time()."_".str_random(12).".".$extension;
            $foto->move($destinationPath, $filename);
            $lahan->path_peta         = $filename;
          }          

          $lahan->save();
          return redirect("/masterlahan")->with('successMessage', 'Data berhasil diupdate!');
        }

        catch(\Illuminate\Database\QueryException $e)
        {
          return redirect("/masterlahan")->with('errMessage', 'Gagal Update!');
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

        // delete existing file
        $destinationPath          = public_path().'/files/lahan';
        $lahan = Lahan::find($id);
        $name = $lahan->path_peta;
        File::delete($destinationPath."/".$name);

        Lahan::destroy($id);
        return redirect('/masterlahan');
    }
}
