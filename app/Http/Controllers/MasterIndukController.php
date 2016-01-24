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
                        ->join('jenis_peta', 'induk.jenis', '=', 'jenis_peta.id')
                        ->select('induk.id', 'induk.path_peta', 'jenis_peta.jenis', 'induk.keterangan', 'kecamatan.kecamatan')
                        ->get();
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
              $induk->hutan_lindung     = $request->input('hutan_lindung');
              $induk->kawasan_bawahan   = $request->input('kawasan_bawahan');
              $induk->sempadan_sungai   = $request->input('sempadan_sungai');
              $induk->sekitar_danauwaduk= $request->input('sekitar_danauwaduk');
              $induk->sekitar_mataair   = $request->input('sekitar_mataair');
              $induk->lindung_spiritual = $request->input('lindung_spiritual');
              $induk->rth               = $request->input('rth');
              $induk->cagar_budaya      = $request->input('cagar_budaya');
              $induk->rawan_bencana     = $request->input('rawan_bencana');
              $induk->lindung_geologi   = $request->input('lindung_geologi');
              $induk->hutan_produksi    = $request->input('hutan_produksi');
              $induk->hutan_rakyat      = $request->input('hutan_rakyat');
              $induk->pertanian         = $request->input('pertanian');
              $induk->perikanan         = $request->input('perikanan');
              $induk->pertambangan      = $request->input('pertambangan');
              $induk->industri          = $request->input('industri');
              $induk->pariwisata        = $request->input('pariwisata');
              $induk->pemukiman         = $request->input('pemukiman');
              $induk->perkebunan        = $request->input('perkebunan');
              $induk->pertahanan        = $request->input('pertahanan');
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
            $induk->hutan_lindung     = $request->input('hutan_lindung');
            $induk->kawasan_bawahan   = $request->input('kawasan_bawahan');
            $induk->sempadan_sungai   = $request->input('sempadan_sungai');
            $induk->sekitar_danauwaduk= $request->input('sekitar_danauwaduk');
            $induk->sekitar_mataair   = $request->input('sekitar_mataair');
            $induk->lindung_spiritual = $request->input('lindung_spiritual');
            $induk->rth               = $request->input('rth');
            $induk->cagar_budaya      = $request->input('cagar_budaya');
            $induk->rawan_bencana     = $request->input('rawan_bencana');
            $induk->lindung_geologi   = $request->input('lindung_geologi');
            $induk->hutan_produksi    = $request->input('hutan_produksi');
            $induk->hutan_rakyat      = $request->input('hutan_rakyat');
            $induk->pertanian         = $request->input('pertanian');
            $induk->perikanan         = $request->input('perikanan');
            $induk->pertambangan      = $request->input('pertambangan');
            $induk->industri          = $request->input('industri');
            $induk->pariwisata        = $request->input('pariwisata');
            $induk->pemukiman         = $request->input('pemukiman');
            $induk->perkebunan        = $request->input('perkebunan');
            $induk->pertahanan        = $request->input('pertahanan');
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
        $query = DB::table('lahan')
                    -> join('kecamatan', 'lahan.kecamatan', '=', 'kecamatan.kecamatan')
                    -> join('jenis', 'lahan.jenis', '=', 'jenis_peta.jenis')
                    -> select ('kecamatan.kecamatan as wilayah', 'jenis_peta.jenis as peta', 'lahan.tahun', 'lahan.hutan_lindung', 'lahan.kawasan_bawahan', 'lahan.sempadan_sungai', 'lahan.sekitar_danauwaduk', 'lahan.sekitar_mataair', 'lahan.lindung_spiritual', 'lahan.rth', 'lahan.cagar_budaya', 'lahan.rawan_bencana', 'lahan.lindung_geologi', 'lahan.hutan_produksi', 'lahan.hutan_rakyat', 'lahan.pertanian', 'lahan.perikanan', 'lahan.pertambangan', 'lahan.industri', 'lahan.pariwisata', 'lahan.pemukiman', 'lahan.perkebunan', 'lahan.pertahanan', 'lahan.keterangan')
                    -> get();
        
        $i=0;
        $datatabel = array();
        foreach($query as $data1){
            
            $result['kecamatan'] = $data1->wilayah;
            $result['peta'] = $data1->peta;
            $result['tahun'] = $data1->tahun;
            $result['hutan_lindung'] = $data1->hutan_lindung;
            $result['kawasan_bawahan'] = $data1->kawasan_bawahan;
            $result['sempadan_sungai'] = $data1->sempadan_sungai;
            $result['sekitar_danauwaduk'] = $data1->sekitar_danauwaduk;
            $result['sekitar_mataair'] = $data1->sekitar_mataair;
            $result['lindung_spiritual'] = $data1->lindung_spiritual;
            $result['rth'] = $data1->rth;
            $result['cagar_budaya'] = $data1->cagar_budaya;
            $result['rawan_bencana'] = $data->rawan_bencana;
            $result['lindung_geologi'] = $data1->lindung->geologi;
            $result['hutan_produksi'] = $data1->hutan_produksi;
            $result['hutan_rakyat'] = $data1->hutan_rakyat;
            $result['perkebunan'] = $data1->perkebunan;
            $result['pertanian'] = $data1->pertanian;
            $result['pariwisata'] = $data1->pariwisata;
            $result['pemukiman'] = $data1->pemukiman;
            $result['pertahanan'] = $data1->pertahanan;
            $result['keterangan'] = $data1->keterangan;
            
            $datatabel[$i] = $result;
            $i++;
        }
        
        $data = array(
            //title
            array('DATA PETA  WILAYAH KABUPATEN KUDUS'),
            array(''),
            //header
            array('Wilayah', 'Jenis Peta', 'Tahun', 'Luasan Area'),
            array('', '', '', 'Kawasan Hutan Lindung', 'Kawasan Yang Memberikan Perlindungan Terhadap Kawasan Bawahannya', 'Sempadan Sungai', 'Kawasan Sekitar Danau atau Waduk', 'Kawasan Sekitar Mata Air', 'Kawasan Lindung Spiritual dan Kearifan Lokal', 'Kawasan Ruang Terbuka Hijau', 'Kawasan Cagar Budaya', 'Kawasan Rawan Bencana Alam', 'Kawasan Lindung Geologi', 'Kawasan Peruntukan Hutan Produksi', 'Kawasan Peruntukan Hutan Rakyat', 'Kawasan Peruntukan Perkebunan', 'Kawasan Peruntukan Pertanian', 'Kawasan Peruntukan Pariwisata', 'Kawasan Peruntukan Pemukimam', 'Kawasan Peruntukan Pertahanan', 'Keterangan')
        );
        
        $i=0;
        $startArray=4;
        foreach($datatabel as $key){
            $data[$startArray] =$datatabel[$i]; 
            
            $i++;
            $startArray++;
        }
        
        Excel::create('Data Peta Landuse Wilayah Kabupaten Kudus', function($excel) use($data) {
            $excel->sheet('lahan landuse', function($sheet) use($data){
                
                //document manipulation
                $sheet->setOrientation('landscape');
                
                //cells manupulation
                
                $sheet->mergeCells('A1:U1');
                $sheet->cells('A1:U1', function($cells){
                    $cells->setFontSize(14);
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                });
                
                $sheet->mergeCells('A3:A4');
                $sheet->cells('A3:A4', function($cells){
                    $cells->setValignment('middle');
                });
                
                $sheet->mergeCells('B3:B4');
                $sheet->cells('B3:B4', function($cells){
                    $cells->setValignment('middle');
                });
                
                $sheet->mergeCells('C3:C4');
                $sheet->cells('C3:C4', function($cells){
                    $cells->setValignment('middle');
                });
                
                $sheet->mergeCells('D3:T3');
                $sheet->cells('D3:T3', function($cells){
                    $cells->setValignment('middle');
                });
                
                $sheet->mergeCells('U3:U4');
                $sheet->cells('U3:U4', function($cells){
                    $cells->setValignment('middle');
                });
                
                $sheet->cells('A3:U4', function($cells){
                    $cells->setAlignment('center');
                    $cells->setFontWeight('bold');
                });
                
                //data
                $sheet->fromArray($data, null, 'A1', false, false);
                
            });
        })->download('xlsx');
    }
}
