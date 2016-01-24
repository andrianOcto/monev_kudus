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

        $data['induk'] = DB::table('induk')
                        ->join('kecamatan', 'induk.kecamatan', '=', 'kecamatan.id')
                        ->select('induk.id', 'induk.path_peta', 'induk.jenis', 'induk.keterangan', 'kecamatan.kecamatan as kecamatan')
                        ->get();
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
              $lahan->hutan_lindung     = $request->input('hutan_lindung');
              $lahan->kawasan_bawahan   = $request->input('kawasan_bawahan');
              $lahan->sempadan_sungai   = $request->input('sempadan_sungai');
              $lahan->sekitar_danauwaduk= $request->input('sekitar_danauwaduk');
              $lahan->sekitar_mataair   = $request->input('sekitar_mataair');
              $lahan->lindung_spiritual = $request->input('lindung_spiritual');
              $lahan->rth               = $request->input('rth');
              $lahan->cagar_budaya      = $request->input('cagar_budaya');
              $lahan->rawan_bencana     = $request->input('rawan_bencana');
              $lahan->lindung_geologi   = $request->input('lindung_geologi');
              $lahan->hutan_produksi    = $request->input('hutan_produksi');
              $lahan->hutan_rakyat      = $request->input('hutan_rakyat');
              $lahan->pertanian         = $request->input('pertanian');
              $lahan->perikanan         = $request->input('perikanan');
              $lahan->pertambangan      = $request->input('pertambangan');
              $lahan->industri          = $request->input('industri');
              $lahan->pariwisata        = $request->input('pariwisata');
              $lahan->pemukiman         = $request->input('pemukiman');
              $lahan->perkebunan        = $request->input('perkebunan');
              $lahan->pertahanan        = $request->input('pertahanan');
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
            $lahan->hutan_lindung     = $request->input('hutan_lindung');
            $lahan->kawasan_bawahan   = $request->input('kawasan_bawahan');
            $lahan->sempadan_sungai   = $request->input('sempadan_sungai');
            $lahan->sekitar_danauwaduk= $request->input('sekitar_danauwaduk');
            $lahan->sekitar_mataair   = $request->input('sekitar_mataair');
            $lahan->lindung_spiritual = $request->input('lindung_spiritual');
            $lahan->rth               = $request->input('rth');
            $lahan->cagar_budaya      = $request->input('cagar_budaya');
            $lahan->rawan_bencana     = $request->input('rawan_bencana');
            $lahan->lindung_geologi   = $request->input('lindung_geologi');
            $lahan->hutan_produksi    = $request->input('hutan_produksi');
            $lahan->hutan_rakyat      = $request->input('hutan_rakyat');
            $lahan->pertanian         = $request->input('pertanian');
            $lahan->perikanan         = $request->input('perikanan');
            $lahan->pertambangan      = $request->input('pertambangan');
            $lahan->industri          = $request->input('industri');
            $lahan->pariwisata        = $request->input('pariwisata');
            $lahan->pemukiman         = $request->input('pemukiman');
            $lahan->perkebunan        = $request->input('perkebunan');
            $lahan->pertahanan        = $request->input('pertahanan');
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
