@extends('template.app')

@section('main-content')

<section class="content-header">
    <h1>Data Master Desa</h1>
    <ol class="breadcrumb" id="breadcrumb-dPeta">
        <li><a href="/desa"><i class="fa fa-circle-o"></i> Data Desa</a></li>
        <li class="active">Tambah Desa</li>
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
                          <input type="number" placeholder="luas dalam ha" id="luas" name="luas">
                        </div>
                      </div>
                      <?php echo csrf_field(); ?>
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