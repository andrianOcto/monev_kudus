@extends('template.app')

@section('main-content')

<section class="content-header">
    <ol class="breadcrumb" id="breadcrumb-dPeta">
        <h1>Data Master Kecamatan</h1>
        <li><a href="/kecamatan"><i class="fa fa-circle-o"></i> Data Kecamatan</a></li>
        <li class="active">Tambah Kecamatan</li>
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
                    <form class="form-horizontal" method="post" action="kecamatan/add">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Kecamatan :</label>
                          <?php echo csrf_field(); ?>
                          <div class="col-sm-7">
                            <input type="text" required name="kecamatan">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Luas Area :</label>
                          <div class="col-sm-4">
                            <input type="number" required id="luas" name="luas">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label"></label>
                          <div class="col-sm-4">
                            <input type="submit" class="btn btn-primary">
                          </div>
                        </div>
                        
                      </form>
                </div>
            </div>
        </div>
    </div>
 </section>

@endsection