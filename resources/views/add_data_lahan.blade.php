@extends('template.app')

@section('main-content')

<section class="content-header">
	<ol class="breadcrumb" id="breadcrumb-dPeta">
        <li><a href="/masterlahan"><i class="fa fa-circle-o"></i> Data Lahan</a></li>
        <li class="active">Tambah Data Lahan</li>
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
	            	<form class="form-horizontal" method="post" enctype="multipart/form-data" action="lahan/add">
	            	<?php echo csrf_field(); ?>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Jenis :</label>
	            			<div class="col-sm-3">
	            				<select class="form-control select2" id="jenis" name="jenis">
	            					<option value="1">jenis 1</option>
	            					<option value="2">jenis 2</option>
	            					<option value="3">jenis 3</option>
	            				</select>
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Wilayah :</label>
	            			<div class="col-sm-3">
	            				<select class="form-control select2" id="kecamatan" name="kecamatan">
	            					@foreach($kecamatan as $data)
	            					<option value="{{$data->id}}">{{$data->kecamatan}}</option>
	            					@endforeach
	            				</select>
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Tahun :</label>
	            			<div class="col-sm-2">
	            				<input id="inputTahun" type="number" class="form-control" required name="tahun">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Peta :</label>
	            			<div class="col-sm-5">
	            				<input type="file" class="form-control" style="border:none; padding:0px" name="path_peta">
	            			</div>
	            		</div>
	            		<div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Hutan Lindung :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="hutan_lindung" name="hutan_lindung">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Yang Memberikan Perlindungan Terhadap Kawasan Bawahannya :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="kawasan_bawahan" name="kawasan_bawahan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sempadan Sungai :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" id="sempadan_sungai" name="sempadan_sungai"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Sekitar Danau atau Waduk :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="sekitar_danauwaduk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Sekitar Mata Air :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="sekitar_mataair">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Lindung dan Kearifan Lokal Lainnya :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="lindung_spiritual">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Ruang Terbuka Hijau :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="rth">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Cagar Budaya :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="cagar_budaya">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Rawan Bencana Alam :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="rawan_bencana">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Lindung Geologi :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="lindung_geologi">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Hutan Produksi :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="hutan_produksi">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Hutan Rakyat :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="hutan_rakyat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Pertanian :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="pertanian">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Perikanan :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="perikanan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Pertambangan :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="pertambangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Industri :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="industri">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Pariwisata :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="pariwisata">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Pemukiman :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="pemukiman">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Perkebunan :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="perkebunan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kawasan Pertahanan :</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="luas dalam ha" name="pertahanan">
                            </div>
                        </div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Keterangan :</label>
	            			<div class="col-sm-6">
	            				<textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
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