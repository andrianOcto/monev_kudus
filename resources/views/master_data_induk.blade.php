@extends('template.app')

@section('main-content')

<section class="content-header">
    <h1>Data Master Administrasi dan Pola ruang</h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="/tambahdatainduk" class="btn btn-primary btn-flat btn-lg">+ Tambah Data</a>
                <div class="pull-right box-tools">
                <button data-original-title="Collapse" class="btn btn-default btn-flat" data-widget="collapse" data-toggle="tooltip" title=""><i class="fa fa-minus"></i></button>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Jenis Peta</th>
                    <th>Wilayah</th>
                    <th>Gambaran</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($induk as $data)
                  <tr>
                      <td><?php if($data->jenis==1) echo "Peta Administrasi";  ?>
                          <?php if($data->jenis==2) echo "Peta Pola Ruang";  ?>
                      </td>
                      <td>{{$data->kecamatan}}</td>
                      <td style="text-align:center"> <img src="{{ asset("files/induk")}}/{{$data->path_peta}}" width="150px"> </td>
                      <td>{{$data->keterangan}}</td>
                      <td style="text-align:center">
                          <a href="/detailinduk/{{$data->id}}" class="btn btn-primary btn-flat"><i class="fa fa-eye"></i> lihat</a>
                          <a href="/editinduk/{{$data->id}}" class="btn btn-warning btn-flat"><i class="fa fa-pencil-square-o"></i> update</a>
                          <a href="#modalDelete" data-toggle="modal" data-seq="{{$data->id}}" data-target="#modalDelete" class="hapus btn btn-danger btn-flat"><i class="fa fa-trash-o"></i> hapus</a>
                      </td>
                  </tr>
                @endforeach
                </tbody>
                </table>
                </div>
                </div>
            </div>

            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Peta Monitoring</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Wilayah</th>
                        <th>Tahun</th>
                        <th>Gambaran</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>Jati</td>
                          <td>2009</td>
                          <td style="text-align:center"> <img src="" width="150px"> </td>
                          <td>keterangan in here</td>
                          <td style="text-align:center">
                              <a href="#" class="btn btn-primary btn-flat"><i class="fa fa-eye"></i> lihat</a>
                              <a href="/editlahan" class="btn btn-warning btn-flat"><i class="fa fa-pencil-square-o"></i> update</a>
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
      <h4> Apakah Anda Yakin Akan Menghapus Data? </h4>
    </div>
    <div class="modal-footer">
      <form action="induk/delete" method="post">
        <?php echo csrf_field(); ?>
        <input  type="hidden" name="id_delete" class="id_delete">
        <button type="submit" class="btn btn-danger btn-flat">Delete</button>
      </form>
    </div>
  </div>
</div>
</div>

@endsection