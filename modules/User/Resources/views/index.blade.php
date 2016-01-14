@extends('template.app')

@section('main-content')

<section class="content-header">
        <h1>Master Data User</h1>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <a href="#modalAdd" data-toggle="modal" data-target="#modalAdd" class="btn btn-primary btn-flat btn-lg">+ Tambah User</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>Hak Akses</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>admin</td>
                          <td>cipkataru kudus</td>
                          <td>Administrator</td>
                          <td style="text-align:center">
                              <a href="#modalUpdate" data-toggle="modal" data-target="#modalUpdate" class="btn btn-warning btn-flat"><i class="fa fa-pencil-square-o"></i> edit password</a>
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
      <h2 class="modal-title" id="myModalLabel">Tambah User</h2>
    </div>
    <div class="modal-body">
      <form class="form-horizontal">
        <div class="form-group">
          <label class="col-sm-3 control-label">Nama Lengkap :</label>
          <div class="col-sm-7">
            <input type="text" required id="nama">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Username :</label>
          <div class="col-sm-7">
            <input type="text" required id="usernama">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Password :</label>
          <div class="col-sm-7">
            <input type="password" required id="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Hak Akses :</label>
          <div class="col-sm-4">
            <select class="form-control" id="role">
              <option value="">Administrator</option>
            </select>
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
      <h2 class="modal-title" id="myModalLabel">Update Password</h2>
    </div>
    <div class="modal-body">
      <form class="form-horizontal">
        <div class="form-group">
          <label class="col-sm-5 control-label">Nama Lengkap :</label>
          <div class="col-sm-7">
            <input type="text" disabled="" id="nama" value="Deny Salvana E">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-5 control-label">Username :</label>
          <div class="col-sm-7">
            <input type="text" disabled="" id="usernama" value="admin">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-5 control-label">Password Lama :</label>
          <div class="col-sm-7">
            <input type="password" required id="passwordlama">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-5 control-label">Password Baru :</label>
          <div class="col-sm-7">
            <input type="password" required id="passwordbaru1">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-5 control-label">Ketik Ulang Password Baru :</label>
          <div class="col-sm-7">
            <input type="password" required id="passwordbaru2">
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