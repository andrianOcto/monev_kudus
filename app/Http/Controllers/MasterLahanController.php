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

use Maatwebsite\Excel\Facades\Excel;

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
        $data['lahan'] = Lahan::find($id);
        return view('detail_lahan')->with($data);
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
    
    public function export(){
        $query = DB::table('lahan')
                    -> join('kecamatan', 'lahan.kecamatan', '=', 'kecamatan.kecamatan')
                    -> select ('kecamatan.kecamatan as wilayah', 'lahan.tahun', 'lahan.hutan_lindung', 'lahan.kawasan_bawahan', 'lahan.sempadan_sungai', 'lahan.sekitar_danauwaduk', 'lahan.sekitar_mataair', 'lahan.lindung_spiritual', 'lahan.rth', 'lahan.cagar_budaya', 'lahan.rawan_bencana', 'lahan.lindung_geologi', 'lahan.hutan_produksi', 'lahan.hutan_rakyat', 'lahan.pertanian', 'lahan.perikanan', 'lahan.pertambangan', 'lahan.industri', 'lahan.pariwisata', 'lahan.pemukiman', 'lahan.perkebunan', 'lahan.pertahanan')
                    -> get();
        
        $i=0;
        $datatabel = array();
        foreach($query as $data1){
            
            $result['kecamatan'] = $data1->wilayah;
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
            
            $datatabel[$i] = $result;
            $i++;
        }
        
        $data = array(
            //title
            array('DATA PETA LANDUSE WILAYAH KABUPATEN KUDUS'),
            array(''),
            //header
            array('Wilayah', 'Tahun', 'Luasan Area'),
            array('', '', 'Kawasan Hutan Lindung', 'Kawasan Yang Memberikan Perlindungan Terhadap Kawasan Bawahannya', 'Sempadan Sungai', 'Kawasan Sekitar Danau atau Waduk', 'Kawasan Sekitar Mata Air', 'Kawasan Lindung Spiritual dan Kearifan Lokal', 'Kawasan Ruang Terbuka Hijau', 'Kawasan Cagar Budaya', 'Kawasan Rawan Bencana Alam', 'Kawasan Lindung Geologi', 'Kawasan Peruntukan Hutan Produksi', 'Kawasan Peruntukan Hutan Rakyat', 'Kawasan Peruntukan Perkebunan', 'Kawasan Peruntukan Pertanian', 'Kawasan Peruntukan Pariwisata', 'Kawasan Peruntukan Pemukimam', 'Kawasan Peruntukan Pertahanan')
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
                
                $sheet->mergeCells('A1:S1');
                $sheet->cells('A1:S1', function($cells){
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
                
                $sheet->mergeCells('C3:S3');
                $sheet->cells('C3:S3', function($cells){
                    $cells->setValignment('middle');
                });
                
                $sheet->cells('A3:S4', function($cells){
                    $cells->setAlignment('center');
                    $cells->setFontWeight('bold');
                });
                
                //data
                $sheet->fromArray($data, null, 'A1', false, false);
                
            });
        })->download('xlsx');
    }
}