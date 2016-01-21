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
                    <a style="float:right" href="#" class="btn btn-primary btn-flat"><i class="fa fa-pencil-square-o"></i> update</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <h2 style="margin-bottom:20px">Wilayah Kecamatan {{$lahan->kecamatan}}</h2>
                    <img src="{{ asset("files/lahan")}}/{{$lahan->path_peta}}" class="img-dPeta">
                    <table>
                        <tr>
                            <td style="width:30%">KCP2B</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->kcp2b}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Cagar Budaya</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->cagar_budaya}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Lindung Spiritual</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->lindung_spiritual}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Hutan Lindung</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->hutan_lindung}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Hutan Rakyat</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->hutan_rakyat}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Per. Industri</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->industri}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Per. Pertanian Tanaman</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->pertanian_tanaman}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Per. Hutan Produksi</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->hutan_produksi}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Per. Hutan Produksi Terbatas</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->hutan_produksi_terbatas}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Per. Pariwisata</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->pariwisata}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Kaw. Per. Pertambangan</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->pertambangan}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">KAw. Per. Tanaman Pangan</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->tanaman_pangan}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Pemukiman Pedesaan</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->pemukiman_pedesaan}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Pemukiman Perkotaan</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->pemukiman_perkotaan}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">TPA</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->tpa}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Sekitar Waduk</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->sekitar_waduk}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Sekitar Mata Air</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->sekitar_mataair}} ha</td>
                        </tr>
                        <tr>
                            <td style="width:30%">Sempadan Sungai</td>
                            <td style="width:5%">:</td>
                            <td style="width:65%">{{$lahan->sempadan_sungai}} ha</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection