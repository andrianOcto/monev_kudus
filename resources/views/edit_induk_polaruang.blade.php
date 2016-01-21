@extends('template.app')

@section('main-content')

<section class="content-header">
    <ol class="breadcrumb" id="breadcrumb-dPeta">
        <li><a href="/masterlahan"><i class="fa fa-circle-o"></i> Data Lahan</a></li>
        <li class="active">Update Data Lahan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                
                <div class="box-body">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="http://localhost:8000/induk/update/{{$induk->id}}">
                    <?php echo csrf_field(); ?>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Wilayah kecamatan :</label>
                            <div class="col-sm-3">
                                <select class="form-control select2" id="kecamatan" name="kecamatan">
                                    @foreach($kecamatan as $data)
                                    <option <?php if($induk->kecamatan==$data->id) echo "selected=''" ?> value="{{$data->id}}">{{$data->kecamatan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tahun :</label>
                            <div class="col-sm-2">
                                <input id="inputTahun" type="number" class="form-control" required name="tahun" value="{{$induk->tahun}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Peta :</label>
                            <div class="col-sm-5">
                                <input type="file" class="form-control" style="border:none; padding:0px" name="path_peta" value="{{$induk->path_peta}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">KCP2B :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="kcp2b" name="kcp2b" value="{{$induk->kcp2b}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Cagar Budaya :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="cagar-budaya" name="cagar_budaya" value="{{$induk->cagar_budaya}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Lindung Spiritual :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="lindung-spiritual" name="lindung_spiritual" value="{{$induk->lindung_spiritual}}" > 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Hutan Lindung :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="hutan-lindung" name="hutan_lindung" value="{{$induk->hutan_lindung}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Hutan Rakyat :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="hutan-rakyat" name="hutan_rakyat" value="{{$induk->hutan_rakyat}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Industri :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="industri" name="industri" value="{{$induk->industri}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Pertanian Tanaman :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="pertanian-tanaman" name="pertanian_tanaman" value="{{$induk->pertanian_tanaman}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Hutan Produksi :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="hutan-produksi" name="hutan_produksi" value="{{$induk->hutan_produksi}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Hutan Produksi Terbatas :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="hutan-produksi-terbatas" name="hutan_produksi_terbatas" value="{{$induk->hutan_produksi_terbatas}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Pariwisata :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="pariwisata" name="pariwisata" value="{{$induk->pariwisata}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Pertambangan :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="pertambangan" name="pertambangan" value="{{$induk->pertambangan}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Tanaman Pangan :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="tanaman-pangan" name="tanaman_pangan" value="{{$induk->tanaman_pangan}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Pemukiman Pedesaan :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="pedesaan" name="pemukiman_pedesaan" value="{{$induk->pemukiman_pedesaan}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Pemukiman Perkotaan :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="perkotaan" name="pemukiman_perkotaan" value="{{$induk->pemukiman_perkotaan}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">TPA :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="tpa" name="tpa" value="{{$induk->tpa}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sekitar Waduk :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="waduk" name="sekitar_waduk" value="{{$induk->sekitar_waduk}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sekitar Mata Air :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="mata-air" name="sekitar_mataair" value="{{$induk->sekitar_mataair}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sempadan Sungai :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="sempadan-sungai" name="sempadan_sungai" value="{{$induk->sempadan_sungai}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Keterangan :</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" id="keterangan" name="keterangan" rows="3">{{$induk->keterangan}}</textarea>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top:40px; margin-bottom:60px">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-1">
                                <input type="submit" class="btn btn-flat btn-primary form-control" id="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </section>

@endsection