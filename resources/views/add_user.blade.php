@extends('template.app')

@section('main-content')

<section class="content-header">
    <ol class="breadcrumb" id="breadcrumb-dPeta">
        <h1>Data Master User</h1>
        <li><a href="/users"><i class="fa fa-circle-o"></i> Data User</a></li>
        <li class="active">Tambah User</li>
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
                <form class="form-horizontal" method="post" action="/users/add">
                <?php echo csrf_field(); ?>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Lengkap :</label>
                    <div class="col-sm-7">
                      <input type="text" required name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Username :</label>
                    <div class="col-sm-7">
                      <input type="text" required name="username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Password :</label>
                    <div class="col-sm-7">
                      <input type="password" required name="password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Hak Akses :</label>
                    <div class="col-sm-4">
                      <select class="form-control" name="role">
                        <option value="">Administrator</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-4">
                          <button type="submit" class="btn btn-primary btn-flat">Tambah</button>
                        </div>
                      </div>
                </form>
                </div>
            </div>
        </div>
    </div>
 </section>

@endsection