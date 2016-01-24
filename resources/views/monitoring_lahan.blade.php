@extends('template.app')

@section('main-content')

<section class="content-header">
    <h1>Monitoring Pemetaan Lahan</h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <div class="form-inline">
                    <form id="monitor" action="" method="post">
                    {{ csrf_field() }}
                    <label>Wilayah : </label>
                    <select class="form-control" id="idKecamatan" name="idKecamatan">
                        @foreach ($kecamatan as $item)
                            <option value="{{$item->id}}">{{$item->kecamatan}}</option>
                        @endforeach
                    </select>
                    &nbsp;
                    <input type="submit" class="btn btn-primary btn-flat" value="Lihat"/>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body" id="scrollx" style="margin-top:20px">
                <!-- <div class="row">
                    <div class="col-lg-6 col-xs-6">
                        <center>
                            <img src="" width="300px">
                            <h4>Peta Administrasi Kecamatan Jati</h4>
                        </center>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <center>
                            <img src="" width="300px">
                            <h4>Peta Pola Ruang Kecamatan Jati</h4>
                        </center>
                    </div>
                </div> 
                &nbsp; -->
                <table class="tCompare">
                    &nbsp;
                    <tr style="text-align:center">
                        <td></td>
                        @foreach ($kabupaten as $item)
                            <td><img class="imgCompare" src="{{$item->path_peta}}" width="200px"></td>
                        @endforeach
                        @foreach ($induk as $item)
                            <td><img class="imgCompare" src="{{$item->path_peta}}" width="200px"></td>
                        @endforeach
                        @foreach ($lahan as $item)
                            <td><img class="imgCompare" src="{{$item->path_peta}}" width="200px"></td>
                        @endforeach
                    </tr>
                    <tr style="text-align:center">
                        <td></td>
                        <td style="line-height:1.5"><strong>Pola Ruang <br/> Kabupaten Kudus <br/></strong></td>
                        @foreach ($induk as $item)
                        <td style="line-height:1.5"><strong>Pola Ruang <br/> Wilayah {{$namaKecamatan}}</strong></td>
                        @endforeach
                        <!-- tahun -->
                        @foreach ($lahan as $item)
                            <td style="line-height:1.5"><strong>Pola Ruang <br/> Wilayah {{$namaKecamatan}}<<br/> {{$item->tahun}} </strong></td>
                        @endforeach
                        
                    </tr>
                    <tr style="background-color:#ECF0F5">
                        <td style="text-align:right; width:20%">Kawasan Lindung :</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Hutan Lindung</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->hutan_lindung}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->hutan_lindung}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->hutan_lindung}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%; line-height:1.5"><strong>Kaw. Yang Memberikan Perlindungan Terhadap Kawasan Bawahannya</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->kawasan_bawahan}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->kawasan_bawahan}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->kawasan_bawahan}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Sempadan Sungai</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->sempadan_sungai}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->sempadan_sungai}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->sempadan_sungai}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20% line-height:1.5"><strong>Kaw. Sekitar Danau atau Waduk</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->sekitar_danauwaduk}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->sekitar_danauwaduk}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->sekitar_danauwaduk}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Sekitar Mata Air</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->sekitar_mataair}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->sekitar_mataair}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->sekitar_mataair}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%; line-height:1.5"><strong>Kaw. Lindung Spiritual dan Kearifan Lokal</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->lindung_spiritual}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->lindung_spiritual}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->lindung_spiritual}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Ruang Terbuka Hijau</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->rth}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->rth}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->rth}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Cagar Budaya</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->cagar_budaya}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->cagar_budaya}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->cagar_budaya}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Rawan Bencana Alam</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->rawan_bencana}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->rawan_bencana}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->rawan_bencana}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Lindung Geologi</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->lindung_geologi}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->lindung_geologi}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->lindung_geologi}} ha</td>
                        @endforeach
                    </tr>
                    <tr style="background-color:#ECF0F5">
                        <td style="text-align:right; width:20%">Kawasan Budidaya:</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Hutan Produksi</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->hutan_produksi}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->hutan_produksi}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->hutan_produksi}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Hutan Rakyat</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->hutan_rakyat}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->hutan_rakyat}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->hutan_rakyat}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Pertanian</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->pertanian}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->pertanian}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->pertanian}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Perikanan</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->perikanan}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->perikanan}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->perikanan}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Pertambangan</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->pertambangan}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->pertambangan}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->pertambangan}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Industri</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->industri}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->industri}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->industri}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Pariwisata</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->pariwisata}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->pariwisata}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->pariwisata}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Pemukiman</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->pemukiman}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->pemukiman}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->pemukiman}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Perkebunan</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->perkebunan}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->perkebunan}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->perkebunan}} ha</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="text-align:right; width:20%"><strong>Kaw. Pertahanan</strong></td>
                        @foreach ($kabupaten as $item)
                           <td style="text-align:center">{{$item->pertahanan}} ha</td>
                        @endforeach
                        @foreach ($induk as $item)
                           <td style="text-align:center">{{$item->pertahanan}} ha</td>
                        @endforeach
                        @foreach ($lahan as $item)
                           <td style="text-align:center">{{$item->pertahanan}} ha</td>
                        @endforeach
                    </tr>
                </table>
            </div>

          </div>
        </div>

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Perijinan Lahan Kecamatan ... </h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Jenis Pemanfaatan Ruang</th>
                    <th>Pemilik (Atas Nama)</th>
                    <th>Desa/Kelurahan</th>
                  </tr>
                </thead>
                @foreach ($perijinan as $item)
                <tbody>
                  <tr>
                      <td>{{$item->pemanfaatan_ruang}}</td>
                      <td>{{$item->pemilik}}</td>
                      <td>{{$item->desa}}</td>
                  </tr>
                  </tbody>
                @endforeach
                </table>
              </div>
            </div>
        </div>
    </div>
</section>

@endsection