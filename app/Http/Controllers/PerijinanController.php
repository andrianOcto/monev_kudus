<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Desa;
use App\Perijinan;
use App\Kecamatan;
use DB;

use Maatwebsite\Excel\Facades\Excel;

class PerijinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['perijinan'] = DB::table('perijinan')
                        ->join('kecamatan', 'perijinan.kecamatan', '=', 'kecamatan.id')
                        ->join('desa', 'perijinan.desa', '=', 'desa.id')
                        ->select('desa.desa', 'kecamatan.kecamatan', 'perijinan.id', 'perijinan.pemanfaatan_ruang', 'perijinan.pemilik')
                        ->get();
        return view('perijinan')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kecamatan'] = Kecamatan::all();
        return view('add_data_perijinan')->with($data);
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
          $perijinan                    = new Perijinan;
          $perijinan->desa              = $request->input("desa");
          $perijinan->kecamatan         = $request->input("kecamatan");
          $perijinan->pemanfaatan_ruang = $request->input("pemanfaatan_ruang");
          $perijinan->pemilik           = $request->input("pemilik");
          $perijinan->save();
          return redirect("/perijinan")->with('successMessage', 'Data berhasil ditambahkan!');;
        }

        catch(\Illuminate\Database\QueryException $e)
        {
          return redirect("/perijinan")->with('errMessage', 'Kode yang disimpan sudah ada dalam database. </br> Harap Coba menggunakan kode yang belum ada');
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
        $data['desa'] = Desa::all();
        $data['kecamatan'] = Kecamatan::all();
        $data['perijinan'] = Perijinan::find($id);
        return view('edit_perijinan')->with($data);
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
          $perijinan                    = Perijinan::find($id);
          $perijinan->desa              = $request->input("desa");
          $perijinan->kecamatan         = $request->input("kecamatan");
          $perijinan->pemanfaatan_ruang = $request->input("pemanfaatan_ruang");
          $perijinan->pemilik           = $request->input("pemilik");
          $perijinan->save();
          return redirect("/perijinan")->with('successMessage', 'Data berhasil ditambahkan!');;
        }

        catch(\Illuminate\Database\QueryException $e)
        {
          return redirect("/perijinan")->with('errMessage', 'Kode yang disimpan sudah ada dalam database. </br> Harap Coba menggunakan kode yang belum ada');
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
        Perijinan::destroy($id);
        return redirect('/perijinan');
    }
    
    public function export(){
        $query = DB::table('perijinan')
                    -> join ('kecamatan', 'perijinan.kecamatan', '=', 'kecamatan.id')
                    -> join ('desa', 'perijinan.desa', '=', 'desa.id')
                    -> select ('perijinan.pemanfaatan_ruang', 'perijinan.pemilik', 'kecamatan.kecamatan as wilayah', 'desa.desa as kelurahan')
                    ->get();
        
        $i=0;
        $datatabel = array();
        foreach($query as $data1){
            
            $result['pemanfaatan_ruang'] = $data1->pemanfaatan_ruang;
            $result['pemilik'] = $data1->pemilik;
            $result['wilayah'] = $data1->wilayah;
            $result['kelurahan'] = $data1->kelurahan;
            
            $datatabel[$i] = $result;
            $i++;
        }
        
        $data = array(
            //title
            array('DAFTAR PERIJINAN PEMANFAATAN RUANG KABUPATEN KUDUS'),
            array(''),
            //header
            array('Jenis Pemanfaatan Ruang', 'Pemilik (Atas Nama)', 'Kecamatan', 'Desa/Kelurahan')
        );
        
        $i=0;
        $startArray=3;
        foreach($datatabel as $key){
            $data[$startArray] =$datatabel[$i]; 
            
            $i++;
            $startArray++;
        }
        
        Excel::create('Daftar perijinan pemanfaatan ruang', function($excel) use($data) {
            $excel->sheet('pemanfaatan ruang', function($sheet) use($data){
                
                //document manipulation
                $sheet->setOrientation('portrait');
                
                //cells manupulation
                $sheet->mergeCells('A1:D1');
                $sheet->cells('A1:D1', function($cells){
                    $cells->setFontSize(14);
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                });
                $sheet->cells('A3:D3', function($cells){
                    $cells->setAlignment('center');
                    $cells->setFontWeight('bold');
                });
                
                //data
                $sheet->fromArray($data, null, 'A1', false, false);
                
            });
        })->download('xlsx');
    }
}
