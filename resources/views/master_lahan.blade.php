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
                          <a href="#" class="btn btn-danger btn-flat"><i class="fa fa-trash-o"></i> hapus</a>
                      </td>
                  </tr>
                 </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection