@extends('template.app')

@section('main-content')

<section class="content-header">
	<ol class="breadcrumb" id="breadcrumb-dPeta">
        <li><a href="/masterinduk"><i class="fa fa-circle-o"></i> Data Induk</a></li>
        <li class="active">Tambah Data Induk</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-xs-12">
          	<div class="box">
	            <div class="box-header">
                    <h4>Pilih Jenis Peta:</h4>
	            </div><!-- /.box-header -->
	            
	            <div class="box-body">
                    <!-- option peta input -->
                      
                      <div>
                      <div>
                        <input type="radio" name="choice-input" id="choice-input-administrasi" required>
                        <label for="choice-input-administrasi" style="font-size:1.5em">Peta Administrasi</label>

                        <div class="reveal-if-active">
                            <!-- form input administrasi -->
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
                                        <input id="inputTahun" type="number" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Peta Administrasi :</label>
                                    <div class="col-sm-5">
                                        <input type="file" class="form-control" style="border:none; padding:0px" required>
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
                                        <input type="submit" class="btn btn-flat btn-primary form-control" id="submit" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                      </div>

                      <div>
                        <input type="radio" name="choice-input" id="choice-input-polaruang">
                        <label for="choice-input-polaruang" style="font-size:1.5em">Peta Pola Ruang</label>

                        <div class="reveal-if-active">
                            <!-- form input pola ruang -->
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
                                        <input id="inputTahun" type="number" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Peta Pola Ruang :</label>
                                    <div class="col-sm-5">
                                        <input type="file" class="form-control" style="border:none; padding:0px" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">KCP2B :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="kcp2b">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kawasan Cagar Budaya :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="cagar-budaya">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kawasan Lindung Spiritual :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="lindung-spiritual">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kawasan Hutan Lindung :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="hutan-lindung">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kawasan Hutan Rakyat :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="hutan-rakyat">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kawasan Industri :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="industri">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kawasan Pertanian Tanaman :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="pertanian-tanaman">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kawasan Hutan Produksi :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="hutan-produksi">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kawasan Hutan Produksi Terbatas :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="hutan-produksi-terbatas">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kawasan Pariwisata :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="pariwisata">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kawasan Pertambangan :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="pertambangan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kawasan Tanaman Pangan :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="tanaman-pangan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Pemukiman Pedesaan :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="pedesaan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Pemukiman Perkotaan :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="perkotaan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">TPA :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="tpa">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Sekitar Waduk :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="waduk">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Sekitar Mata Air :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="mata-air">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Sempadan Sungai :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" placeholder="luas dalam ha" id="sempadan-sungai">
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
                                        <input type="submit" class="btn btn-flat btn-primary form-control" id="submit" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                      </div>
                    </div>
	            </div>
			</div>
		</div>
	</div>
    
    
 </section>

@endsection