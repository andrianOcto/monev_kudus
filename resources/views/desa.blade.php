@extends('template.app')

@section('main-content')

<section class="content-header">
    <h1>Data Master Desa/Kelurahan</h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="#modalAdd" data-toggle="modal" data-target="#modalAdd" class="btn btn-primary btn-flat btn-lg">+ Tambah Data</a>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Kode</th>
                    <th>Kecamtan</th>
                    <th>Desa/Kelurahan</th>
                    <th>Luas</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>01</td>
                      <td>Kaliwungu</td>
                      <td>Kedungdowo</td>
                      <td></td>
                      <td style="text-align:center">
                          <a href="#modalUpdate" data-toggle="modal" data-target="#modalUpdate" class="btn btn-warning btn-flat"><i class="fa fa-pencil-square-o"></i> update</a>
                          <a href="#modalDelete" data-toggle="modal" data-target="#modalDelete" class="btn btn-danger btn-flat"><i class="fa fa-trash-o"></i> hapus</a>
                      </td>
                    </tr>
                    </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</section>

<!-- add data -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h2 class="modal-title" id="myModalLabel">Tambah Data Desa/Kelurahan</h2>
    </div>
    <div class="modal-body">
      <form class="form-horizontal">
        <div class="form-group">
          <label class="col-sm-3 control-label">Kecamatan :</label>
          <div class="col-sm-7">
            <select class="form-control select2" id="kecamatan">
              <option value="">Kaliwungu</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Desa/Kelurahan :</label>
          <div class="col-sm-7">
            <input type="text" required id="desa">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Luas Area :</label>
          <div class="col-sm-4">
            <input type="number" required placeholder="luas dalam ha" id="luas">
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <form action="" method="">
        <button type="submit" class="btn btn-primary btn-flat">Tambah</button>
      </form>
    </div>
  </div>
</div>
</div>

<!-- update data -->
<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h2 class="modal-title" id="myModalLabel">Tambah Data Desa/Kelurahan</h2>
    </div>
    <div class="modal-body">
      <form class="form-horizontal">
        <div class="form-group">
          <label class="col-sm-3 control-label">Kecamatan :</label>
          <div class="col-sm-7">
            <select class="form-control select2" id="kecamatan">
              <option value="">Kaliwungu</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Desa/Kelurahan :</label>
          <div class="col-sm-7">
            <input type="text" required id="desa" value="Kedungdowo">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Luas Area :</label>
          <div class="col-sm-4">
            <input type="number" required id="luas" value="0.9">
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <form action="" method="">
        <button type="submit" class="btn btn-warning btn-flat">Update</button>
      </form>
    </div>
  </div>
</div>
</div>

<!-- delete data -->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h2 class="modal-title" id="myModalLabel">Perhatian</h2>
    </div>
    <div class="modal-body">
      <h4> Apakah Anda Yakin Akan Menghapus Data? </h4>
    </div>
    <div class="modal-footer">
      <form action="" method="">
        <button type="submit" class="btn btn-danger btn-flat">Delete</button>
      </form>
    </div>
  </div>
</div>
</div>

@endsection