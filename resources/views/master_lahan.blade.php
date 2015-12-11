@extends('template.app')

@section('main-content')

<section class="content-header">
    <h1>Data Master Tahunan Pemetaan Lahan</h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="#" class="btn btn-primary btn-flat btn-lg">+ Tambah Data</a>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Wilayah Kecamatan</th>
                    <th>Tahun</th>
                    <th>Gambaran</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>Bae</td>
                      <td>2009</td>
                      <td style="text-align:center"> <img src="" width="150px"> </td>
                      <td>keterangan in here</td>
                      <td style="text-align:center">
                          <a href="detailPeta.php" class="btn btn-primary btn-flat"><i class="fa fa-eye"></i> lihat</a>
                          <a href="#" class="btn btn-warning btn-flat"><i class="fa fa-pencil-square-o"></i> update</a>
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

<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h2 class="modal-title" id="myModalLabel">Perhatian</h2>
    </div>
    <div class="modal-body">
      <h4> Apakah Anda Yakin Akan Menghapus Data </h4>
    </div>
    <div class="modal-footer">
      <form action="" method="">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </div>
  </div>
</div>
</div>

@endsection