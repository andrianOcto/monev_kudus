@extends('template.app')

@section('main-content')

<section class="content-header">
    <h1>Data Master Kecamatan</h1>
    <ol class="breadcrumb" id="breadcrumb-dPeta">
        <li><a href="/kecamatan"><i class="fa fa-circle-o"></i> Data Kecamatan</a></li>
        <li class="active">Edit Kecamatan</li>
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
                    <form class="form-horizontal" method="post" action="http://localhost:8000/kecamatan/update/{{$kecamatan->id}}">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Kecamatan :</label>
                          <?php echo csrf_field(); ?>
                          <div class="col-sm-7">
                            <input type="text" required name="kecamatan" value="{{$kecamatan->kecamatan}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Luas Area :</label>
                          <div class="col-sm-4">
                            <input type="number" required id="luas" name="luas" value="{{$kecamatan->luas}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label"></label>
                          <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                          </div>
                        </div>
                        
                      </form>
                </div>
            </div>
        </div>
    </div>
 </section>

@endsection