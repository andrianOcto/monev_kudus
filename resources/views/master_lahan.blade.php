@extends('template.app')

@section('main-content')

<section class="content-header">
    <h1>Data Master Tahunan Pemetaan Lahan</h1>
</section>
          @if (session('errMessage') != null)
          <!-- Error message kalau kode sudah pernah di masukkan -->
          <div class="alert alert-danger alert-dismissable ">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Data gagal disimpan!</h4>
            {!! session('errMessage') !!}
          </div>
          @endif

         @if (session('successMessage') != null)
          <!-- Success message kalau data berhasil dimasukkan -->
          <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>{{session('successMessage')}} </h4>
          </div>
          @endif
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="/tambahlahan" class="btn btn-primary btn-flat btn-lg">+ Tambah Data</a>
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
                  @foreach($lahan as $data)
                      <td>{{$data->kecamatan}}</td>
                      <td>{{$data->tahun}}</td>
                      <td style="text-align:center"> <img src="{{ asset("files/lahan")}}/{{$data->path_peta}}" width="150px"> </td>
                      <td>{{$data->keterangan}}</td>
                      <td style="text-align:center">
                          <a href="/detaillahan/{{$data->id}}" class="btn btn-primary btn-flat"><i class="fa fa-eye"></i> lihat</a>
                          <a href="/editlahan/{{$data->id}}" class="btn btn-warning btn-flat"><i class="fa fa-pencil-square-o"></i> update</a>
                          <a href="#modalDelete" data-toggle="modal" data-seq="{{$data->id}}" data-target="#modalDelete" class="hapus btn btn-danger btn-flat"><i class="fa fa-trash-o"></i> hapus</a>
                      </td>
                  </tr>
                  @endforeach
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
      <form action="lahan/delete" method="post">
        <?php echo csrf_field(); ?>
        <input  type="hidden" name="id_delete" class="id_delete">
        <button type="submit" class="btn btn-danger btn-flat">Delete</button>
      </form>
    </div>
  </div>
</div>
</div>

@endsection