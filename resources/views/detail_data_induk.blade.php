@extends('template.app')

@section('main-content')

<section class="content-header" style="margin-bottom:30px">
    <!-- <ol class="breadcrumb" id="breadcrumb-dPeta">
        <li><a href="/masterinduk"><i class="fa fa-circle-o"></i> Data Induk</a></li>
        <li class="active">Detail Peta</li>
      </ol> -->
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">edited: {{$induk->updated_at}}</h3>
                    <a style="float:right" href="/editinduk/{{$induk->id}}" class="btn btn-primary btn-flat"><i class="fa fa-pencil-square-o"></i> update</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <h2 style="margin-bottom:20px">Wilayah Kecamatan {{$kecamatan->kecamatan}}</h2>
                    <img src="{{ asset("files/induk")}}/{{$induk->path_peta}}" class="img-dPeta">
                    <table>
                        <tr>
                            <td style="width:30%">Kawasan Hutan Lindung</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->hutan_lindung}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Yang Memberikan Perlindungan Terhadap Kawasan Bawahannya</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->kawasan_bawahan}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Sempadan Sungai</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->sempadan_sungai}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Sekitar Danau atau Waduk</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->sekitar_danauwaduk}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Sekitar Mata Air</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->sekitar_mataair}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Lindung dan Kearifan Lokal</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->lindung_spiritual}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Ruang Terbuka Hijau</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->rth}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Cagar Budaya</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->cagar_budaya}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Rawan Bencana Alam</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->rawan_bencana}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Lindung Geologi</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->lindung_geologi}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Hutan Produksi</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->hutan_produksi}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Hutan Rakyat</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->hutan_rakyat}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Pertanian</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->pertanian}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Perikanan</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->perikanan}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Pertambangan</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->pertambangan}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Industri</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->industri}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Pariwisata</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->pariwisata}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Pemukiman</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->pemukiman}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Perkebunan</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->perkebunan}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Pertahanan</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->pertahanan}} ha</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Perijinan Lahan Kecamatan </h3>
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