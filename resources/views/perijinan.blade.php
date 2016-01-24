@extends('template.app')

@section('main-content')

<section class="content-header">
    <h1>Data Perijinan</h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="/tambahperijinan" class="btn btn-primary btn-flat btn-lg">+ Tambah Data Perijinan</a>
                <a href="/perijinan/export" class="btn btn-success btn-flat btn-lg" style="float:right">Export Excel</a>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
					<tr>
	                    <th>No</th>
	                    <th>Jenis Pemanfaatan Ruang</th>
	                    <th>Pemilik (Atas Nama)</th>
	                    <th>Desa/Kelurahan</th>
	                    <th>Kecamatan</th>
	                    <th>Action</th>
                	</tr>
                </thead>
                <tbody>
                @foreach($perijinan as $data)
                    <tr>
          						<td>{{$data->id}}</td>
          						<td>{{$data->pemanfaatan_ruang}}</td>
          						<td>{{$data->pemilik}}</td>
          						<td>{{$data->desa}}</td>
          						<td>{{$data->kecamatan}}</td>
          						<td style="text-align:center">
          						  <a href="/editperijinan/{{$data->id}}" class="btn btn-warning btn-flat"><i class="fa fa-pencil-square-o"></i> update</a>
          						  &nbsp;
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
      <form action="/perijinan/delete" method="post">
      <?php echo csrf_field(); ?>
        <input  type="hidden" name="id_delete" class="id_delete">
        <button type="submit" class="btn btn-danger btn-flat">Delete</button>
      </form>
    </div>
  </div>
</div>
</div>

@endsection