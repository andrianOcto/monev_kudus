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
                    <h3 class="box-title">edited: {{$lahan->updated_at}}</h3>
                    <a style="float:right" href="/editlahan/{{$data->id}}" class="btn btn-primary btn-flat"><i class="fa fa-pencil-square-o"></i> update</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <h2 style="margin-bottom:20px">Wilayah Kecamatan {{$lahan->kecamatan}}</h2>
                    <img src="{{ asset("files/lahan")}}/{{$lahan->path_peta}}" class="img-dPeta">
                    <table>
                        <tr>
                            <td style="width:30%">Kawasan Hutan Lindung</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->hutan_lindung}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Yang Memberikan Perlindungan Terhadap Kawasan Bawahannya</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->kawasan_bawahan}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Sempadan Sungai</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->sempadan_sungai}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Sekitar Danau atau Waduk</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->sekitar_danauwaduk}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Sekitar Mata Air</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->sekitar_mataair}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Lindung dan Kearifan Lokal</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->lindung_spiritual}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Ruang Terbuka Hijau</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->rth}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Cagar Budaya</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->cagar_budaya}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Rawan Bencana Alam</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->rawan_bencana}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Lindung Geologi</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->lindung_geologi}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Hutan Produksi</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->hutan_produksi}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Hutan Rakyat</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->hutan_rakyat}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Pertanian</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->pertanian}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Perikanan</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->perikanan}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kawasan Pertambangan</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->pertambangan}} ha</td>
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
                <tbody>
                  <tr>
                      <td>Pembangunan Kantor dan Tempat Usaha Pengumpulan Barang Bekas</td>
                      <td>CV. Putra Jaya</td>
                      <td>Tanjungkarang</td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</section>

@endsection