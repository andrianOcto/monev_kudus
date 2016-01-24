<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kecamatan;
use App\Induk;
use App\Lahan;
use App\Perijinan;
class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kecamatan'] = Kecamatan::all();
        $i=0;
        $default = 1;
        $defaultName = "";
        foreach ($data['kecamatan'] as $key => $value) {
            if($i==0){
                $default     = $value->id;
                $defaultName = $value->kecamatan;
            }
                
            $i++;
        }

        $data['perijinan']      = DB::table('perijinan')
            ->join('desa', 'perijinan.desa', '=', 'desa.id')
            ->join('kecamatan', 'perijinan.kecamatan', '=', 'kecamatan.id')
            ->select('perijinan.pemanfaatan_ruang', 'perijinan.pemilik', 'desa.desa')
            ->where('kecamatan.id', '=', 1)
            ->get();

        $data['kabupaten']      = Induk::where('kecamatan', '=', 15)
                                     ->where('jenis', '=', 2)->get();
        $data['induk']          = Induk::where('kecamatan', '=', $default)
                                     ->where('jenis', '=', 2)->get();
        $data['lahan']          = Lahan::where('kecamatan', '=', $default)
                                     ->where('jenis', '=', 3)->get();

        $data['namaKecamatan']  = $defaultName;

        return view('monitoring_lahan')->with($data);
        //var_dump($default);                 
    }

    public function updatePage(Request $request)
    {
        $data['kecamatan']  = Kecamatan::all(); 
        $idKecamatan        = $request->input('idKecamatan');
        $i=0;
        $defaultName = "";
        foreach ($data['kecamatan'] as $key => $value) {
            if($value->id == $idKecamatan){
                $defaultName = $value->kecamatan;
                break;
            }
        }
        
        $data['perijinan']      = DB::table('perijinan')
            ->join('desa', 'perijinan.desa', '=', 'desa.id')
            ->join('kecamatan', 'perijinan.kecamatan', '=', 'kecamatan.id')
            ->select('perijinan.pemanfaatan_ruang', 'perijinan.pemilik', 'desa.desa')
            ->where('kecamatan.id', '=', $idKecamatan)
            ->get();

        $data['namaKecamatan']  = $defaultName;

        $data['kabupaten']      = Induk::where('kecamatan', '=', 15)
                                     ->where('jenis', '=', 2)->get();
        $data['induk']      = Induk::where('kecamatan', '=', $idKecamatan)
                                     ->where('jenis', '=', 2)->get();
        $data['lahan']      = Lahan::where('kecamatan', '=', $idKecamatan)
                                     ->where('jenis', '=', 3)->get();


        return view('monitoring_lahan')->with($data);
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
