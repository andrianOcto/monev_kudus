@extends('template.app')

@section('main-content')

<section class="content-header">
    <h1>Data Perijinan Lahan</h1>
    <ol class="breadcrumb" id="breadcrumb-dPeta">
        <li><a href="/perijinan"><i class="fa fa-circle-o"></i> Data Perijinan</a></li>
        <li class="active">Tambah Perijinan</li>
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
                    <form class="form-horizontal" method="post" action="/desa/add">
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Kecamatan :</label>
                        <div class="col-sm-3">
                          <select class="form-control select2" id="kecamatan" name="kecamatan">
                            <option value="">Kota</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Desa/Kelurahan :</label>
                        <div class="col-sm-3">
                          <select class="form-control select2" id="desa" name="desa">
                            <option value="">Purwosari</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Jenis Pemanfaatan Ruang :</label>
                        <div class="col-sm-7">
                          <textarea class="form-control" rows="3" required name="pemanfaatan_ruang"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Pemilik (Atas Nama) :</label>
                        <div class="col-sm-7">
                          <textarea class="form-control" rows="1" required name="pemilik" style="width:100%"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-4">
                          <button type="submit" class="btn btn-primary btn-flat">Tambah</button>
                        </div>
                      </div>
                      
                </div>
            </div>
        </div>
    </div>
 </section>

@endsection