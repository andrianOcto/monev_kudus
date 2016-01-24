@extends('template.app')

@section('main-content')

<section class="content-header">
    <ol class="breadcrumb" id="breadcrumb-dPeta">
        <li><a href="/masterlahan"><i class="fa fa-circle-o"></i> Data Lahan</a></li>
        <li class="active">Update Data Lahan</li>
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
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="http://localhost:8000/induk/update/{{$induk->id}}">
                    <?php echo csrf_field(); ?>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Wilayah :</label>
                            <div class="col-sm-3">
                                <select class="form-control select2" id="kecamatan" name="kecamatan">
                                    @foreach($kecamatan as $data)
                                    <option <?php if($induk->kecamatan==$data->id) echo "selected=''" ?> value="{{$data->id}}">{{$data->kecamatan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tahun :</label>
                            <div class="col-sm-2">
                                <input id="inputTahun" type="number" class="form-control" required name="tahun" value="{{$induk->tahun}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Peta :</label>
                            <div class="col-sm-5">
                                <input type="file" class="form-control" style="border:none; padding:0px" name="path_peta" value="{{$induk->path_peta}}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Keterangan :</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" id="keterangan" name="keterangan" rows="3">{{$induk->keterangan}}</textarea>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top:40px; margin-bottom:60px">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-1">
                                <input type="submit" class="btn btn-flat btn-primary form-control" id="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </section>

@endsection