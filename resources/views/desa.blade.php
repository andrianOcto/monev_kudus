@extends('template.app')

@section('main-content')

<section class="content-header">
    <h1>Data Master Desa/Kelurahan</h1>
</section>

<section class="content">
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
                <?php $i=1; ?>
                @foreach($desa as $data)
                    <tr>
                      <td>{{$data->id}}</td>
                      <td>{{$data->kecamatan}}</td>
                      <td>{{$data->desa}}</td>
                      <td>{{$data->luas}}</td>
                      <td style="text-align:center">
                          <a href="#modalUpdate{{$i}}" data-toggle="modal" data-target="#modalUpdate{{$i}}" class="edit btn btn-warning btn-flat"><i class="fa fa-pencil-square-o"></i> update</a>
                          <a href="#modalDelete" data-seq="{{$data->id}}" data-toggle="modal" data-target="#modalDelete" class="hapus btn btn-danger btn-flat"><i class="fa fa-trash-o"></i> hapus</a>
                      </td>
                    </tr>
                <?php $i++; ?>
                @endforeach
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
      <form class="form-horizontal" method="post" action="/desa/add">
        <div class="form-group">
          <label class="col-sm-3 control-label">Kecamatan :</label>
          <div class="col-sm-7">
            <select class="form-control select2" id="kecamatan" name="kecamatan">
              @foreach($kecamatan as $data)
              <option value="{{$data->id}}">{{$data->kecamatan}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Desa/Kelurahan :</label>
          <div class="col-sm-7">
            <input type="text" required id="desa" name="desa">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Luas Area :</label>
          <div class="col-sm-4">
            <input type="number" required placeholder="luas dalam ha" id="luas" name="luas">
          </div>
        </div>
        <?php echo csrf_field(); ?>
      
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-flat">Tambah</button>
    </div>
    </form>
  </div>
</div>
</div>

<!-- update data -->
<?php $i=1; ?>
@foreach($desa as $data)
<div class="modal fade" id="modalUpdate{{$i}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h2 class="modal-title" id="myModalLabel">Tambah Data Desa/Kelurahan</h2>
    </div>
    <div class="modal-body">
      <form class="form-horizontal" method="post" action="desa/update">
      <?php echo csrf_field(); ?>
      <input type="hidden" id="id" name="id" value="{{$data->id}}">
        <div class="form-group">
          <label class="col-sm-3 control-label">Kecamatan :</label>
          <div class="col-sm-7">
            <select class="form-control select2" id="kecamatan" name="kecamatan">
              @foreach($kecamatan as $kec)
              <option value="{{$kec->id}}" <?php if($kec->id==$data->id_kecamatan) echo "selected" ?>>{{$kec->kecamatan}}</option>
              @endforeach  
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Desa/Kelurahan :</label>
          <div class="col-sm-7">
            <input type="text" required id="desa" name="desa" value="{{$data->desa}}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Luas Area :</label>
          <div class="col-sm-4">
            <input type="number" required id="luas" name="luas" value="{{$data->luas}}">
          </div>
        </div>
      
    </div>
    <div class="modal-footer">
      
        <button type="submit" class="btn btn-warning btn-flat">Update</button>
      </form>
    </div>
  </div>
</div>
</div>
<?php $i++; ?>
@endforeach

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
      <form action="desa/delete" method="post">
        <?php echo csrf_field(); ?>
        <input  type="hidden" name="id_delete" class="id_delete">
        <button type="submit" class="btn btn-danger btn-flat">Delete</button>
      </form>
    </div>
  </div>
</div>
</div>


@endsection