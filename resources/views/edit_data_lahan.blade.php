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
	            	<form class="form-horizontal">
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Wilayah kecamatan :</label>
	            			<div class="col-sm-3">
	            				<select class="form-control select2" id="kecamatan">
	            					<option value="">Jati</option>
	            				</select>
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Tahun :</label>
	            			<div class="col-sm-2">
	            				<input id="inputTahun" type="number" class="form-control" required value="2009">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Peta :</label>
	            			<div class="col-sm-5">
	            				<input type="file" class="form-control" style="border:none; padding:0px" required>
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">KCP2B :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="kcp2b" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Kawasan Cagar Budaya :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="cagar-budaya" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Kawasan Lindung Spiritual :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="lindung-spiritual" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Kawasan Hutan Lindung :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="hutan-lindung" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Kawasan Hutan Rakyat :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="hutan-rakyat" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Kawasan Industri :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="industri" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Kawasan Pertanian Tanaman :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="pertanian-tanaman" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Kawasan Hutan Produksi :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="hutan-produksi" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Kawasan Hutan Produksi Terbatas :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="hutan-produksi-terbatas" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Kawasan Pariwisata :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="pariwisata" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Kawasan Pertambangan :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="pertambangan" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Kawasan Tanaman Pangan :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="tanaman-pangan" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Pemukiman Pedesaan :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="pedesaan" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Pemukiman Perkotaan :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="perkotaan" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">TPA :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="tpa" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Sekitar Waduk :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="waduk" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Sekitar Mata Air :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="mata-air" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Sempadan Sungai :</label>
	            			<div class="col-sm-2">
	            				<input type="number" class="form-control" id="sempadan-sungai" value="0.9">
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-sm-3 control-label">Keterangan :</label>
	            			<div class="col-sm-6">
	            				<textarea class="form-control" id="keterangan" rows="3"></textarea>
	            			</div>
	            		</div>
	            		<div class="form-group" style="margin-top:40px; margin-bottom:60px">
	            			<label class="col-sm-3 control-label"></label>
	            			<div class="col-sm-1">
	            				<input type="submit" class="btn btn-flat btn-warning form-control" id="submit" value="Update">
	            			</div>
	            		</div>
	            	</form>
	            </div>
			</div>
		</div>
	</div>
 </section>

@endsection