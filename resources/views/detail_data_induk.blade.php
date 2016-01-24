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
                    <a style="float:right" href="#" class="btn btn-primary btn-flat"><i class="fa fa-pencil-square-o"></i> update</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <h2 style="margin-bottom:20px">Wilayah Kecamatan {{$kecamatan->kecamatan}}</h2>
                    <img src="{{ asset("files/induk")}}/{{$induk->path_peta}}" class="img-dPeta">
                    <table>
                        <tr>
                            <td style="width:30%">KCP2B</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->kcp2b}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Cagar Budaya</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->cagar_budaya}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Lindung Spiritual</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->lindung_spiritual}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Hutan Lindung</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->hutan_lindung}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Hutan Rakyat</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->hutan_rakyat}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Per. Industri</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->industri}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Per. Pertanian Tanaman</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->pertanian_tanaman}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Per. Hutan Produksi</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->hutan_produksi}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Per. Hutan Produksi Terbatas</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->hutan_produksi_terbatas}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Per. Pariwisata</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->pariwisata}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Per. Pertambangan</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->pertambangan}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">KAw. Per. Tanaman Pangan</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->tanaman_pangan}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Pemukiman Pedesaan</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->pemukiman_pedesaan}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Pemukiman Perkotaan</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->pemukiman_perkotaan}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">TPA</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->tpa}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Sekitar Waduk</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->sekitar_waduk}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Sekitar Mata Air</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->sekitar_mataair}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Sempadan Sungai</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$induk->sempadan_sungai}} ha</td>
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