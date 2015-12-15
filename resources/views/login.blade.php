<!DOCTYPE html>
<html>

@include('template.htmlheader')  

<body class="hold-transition lockscreen">

<div class="lockscreen-wrapper">
    <div class="lockscreen-logo">
        Sistem Informasi Monitoring, Evaluasi, dan Pelaporan Pemanfaatan Ruang<br>
        Kabupaten Kudus
    </div>
  <center>
    <div class="login-box-body" style="padding-top:30px; width:50%">
    <form action="" method="">
      <div class="form-group has-feedback">
        <input type="hidden" class="form-control" name="type" value="login" required>
        <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div><!-- /.col -->
      </div>
    </form>
    </div>
    </center>
    <div class="lockscreen-footer text-center" style="margin-top:100px">
      Copyright &copy; 2015 <b>Dinas Cipkataru Kudus</b><br>
      All rights reserved
    </div>
  </div><!-- /.center -->

@include('template.scripts')

</body>
</html>