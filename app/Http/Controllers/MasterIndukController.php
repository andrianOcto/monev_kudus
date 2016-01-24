<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Lahan;
use App\Induk;
use App\Desa;
use App\Kecamatan;
use DB;
use File;

use Maatwebsite\Excel\Facades\Excel;

class MasterIndukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['induk'] = DB::table('induk')
        //                   ->join('kecamatan', 'induk.kecamatan', '=', 'kecamatan.id')
        //                   ->select('induk.jenis', 'kecamatan.kecamatan as kec', 'induk.path_peta', 'induk.keterangan')
        //                   ->get();
        $data['induk'] = Induk::all();
        $data['kecamatan'] = Kecamatan::all();
        return view('master_data_induk')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kecamatan'] = Kecamatan::all();
        return view('add_data_induk')->with($data);
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
          $induk                    = new Induk;
          $jenis                    = $request->input("jenis");
          $induk->jenis             = $jenis;
          $induk->kecamatan         = $request->input("kecamatan");
          $induk->keterangan        = $request->input("keterangan");
          $induk->tahun             = $request->input("tahun");
          
          if ($jenis==2) 
          {
              $induk->kcp2b             = $request->input("kcp2b");
              $induk->cagar_budaya      = $request->input("cagar_budaya");
              $induk->lindung_spiritual = $request->input("lindung_spiritual");
              $induk->hutan_rakyat      = $request->input("hutan_rakyat");
              $induk->hutan_lindung     = $request->input("hutan_lindung");
              $induk->industri          = $request->input("industri");
              $induk->pertanian_tanaman = $request->input("pertanian_tanaman");
              $induk->hutan_produksi    = $request->input("hutan_produksi");
              $induk->hutan_produksi_terbatas = $request->input("hutan_produksi_terbatas");
              $induk->pariwisata        = $request->input("pariwisata");
              $induk->pertambangan      = $request->input("pertambangan");
              $induk->tanaman_pangan    = $request->input("tanaman_pangan");
              $induk->pemukiman_pedesaan= $request->input("pemukiman_pedesaan");
              $induk->pemukiman_perkotaan = $request->input("pemukiman_perkotaan");
              $induk->tpa               = $request->input("tpa");
              $induk->sekitar_waduk     = $request->input("sekitar_waduk");
              $induk->sekitar_mataair   = $request->input("sekitar_mataair");
              $induk->sempadan_sungai   = $request->input("sempadan_sungai");
          }

          // file
          $foto                     = $request->file("path_peta");
          $destinationPath          = public_path().'/files/induk';
          $extension                = $foto->getClientOriginalExtension();
          $filename                 = time()."_".str_random(12).".".$extension;
          $foto->move($destinationPath, $filename);

          $induk->path_peta         = $filename;

          $induk->save();
          return redirect("/masterinduk")->with('successMessage', 'Data berhasil ditambahkan!');
        }

        catch(\Illuminate\Database\QueryException $e)
        {
          // return redirect("/masterinduk")->with('errMessage', 'Data Gagal Disimpan!');
            echo $e;
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
        $data['induk'] = Induk::find($id);
        return view('detail_data_induk')->with($data);
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
        $induk = Induk::find($id);
        $jenis = $induk->jenis;
        $data['induk'] = Induk::find($id);

        if($jenis==1)
        {   
            return view('edit_induk_administrasi')->with($data);
        }
        elseif ($jenis==2) 
        {
            return view('edit_induk_polaruang')->with($data);    
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
        try
        {
          $induk                    = Induk::find($id);
          $jenis                    = $induk->jenis;
          
          $induk->kecamatan         = $request->input("kecamatan");
          $induk->keterangan        = $request->input("keterangan");
          $induk->tahun             = $request->input("tahun");
          
          if ($jenis==2) 
          {
            $induk->kcp2b             = $request->input("kcp2b");
            $induk->cagar_budaya      = $request->input("cagar_budaya");
            $induk->lindung_spiritual = $request->input("lindung_spiritual");
            $induk->hutan_rakyat      = $request->input("hutan_rakyat");
            $induk->hutan_lindung     = $request->input("hutan_lindung");
            $induk->industri          = $request->input("industri");
            $induk->pertanian_tanaman = $request->input("pertanian_tanaman");
            $induk->hutan_produksi    = $request->input("hutan_produksi");
            $induk->hutan_produksi_terbatas = $request->input("hutan_produksi_terbatas");
            $induk->pariwisata        = $request->input("pariwisata");
            $induk->pertambangan      = $request->input("pertambangan");
            $induk->tanaman_pangan    = $request->input("tanaman_pangan");
            $induk->pemukiman_pedesaan= $request->input("pemukiman_pedesaan");
            $induk->pemukiman_perkotaan = $request->input("pemukiman_perkotaan");
            $induk->tpa               = $request->input("tpa");
            $induk->sekitar_waduk     = $request->input("sekitar_waduk");
            $induk->sekitar_mataair   = $request->input("sekitar_mataair");
            $induk->sempadan_sungai   = $request->input("sempadan_sungai");
          }

          // file
          if ($request->hasFile('path_peta')) 
          {
            $foto                     = $request->file("path_peta");
            $destinationPath          = public_path().'/files/induk';
            $extension                = $foto->getClientOriginalExtension();
            $filename                 = time()."_".str_random(12).".".$extension;
            $foto->move($destinationPath, $filename);
            $induk->path_peta         = $filename;
          }

          $induk->save();
          return redirect("/masterinduk")->with('successMessage', 'Data berhasil ditambahkan!');
        }

        catch(\Illuminate\Database\QueryException $e)
        {
          // return redirect("/masterinduk")->with('errMessage', 'Data Gagal Disimpan!');
            echo $e;
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
        $destinationPath          = public_path().'/files/induk';
        $induk = Induk::find($id);
        $name = $induk->path_peta;
        File::delete($destinationPath."/".$name);

        Induk::destroy($id);
        return redirect('/masterinduk');
    }
    
    public function export(){
        
    }
}
