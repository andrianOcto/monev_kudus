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
                          <a href="#" class="btn btn-primary btn-flat"><i class="fa fa-eye"></i> lihat</a>
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