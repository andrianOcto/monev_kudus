<!DOCTYPE html>
<html>

@include('template.htmlheader')  

<body class="hold-transition lockscreen">

<div class="lockscreen-wrapper">
    <div class="lockscreen-logo">
        Sistem Informasi Monitoring, Evaluasi, dan Pelaporan Pemanfaatan Ruang<br>
        Kabupaten Kudus
    </div>
    <!-- User name -->
    <div class="lockscreen-name">Administrator</div>

    <!-- START LOCK SCREEN ITEM -->
    <div class="lockscreen-item">
      <!-- lockscreen image -->
      <div class="lockscreen-image">
        <img src="{{ asset("/images/black302.png") }}" alt="User Image">
      </div>
      <!-- /.lockscreen-image -->

      <!-- lockscreen credentials (contains the form) -->
      <form class="lockscreen-credentials">
        <div class="input-group">
          <input type="password" class="form-control" placeholder="password">
          <div class="input-group-btn">
            <a href="/" class="btn"><i class="fa fa-arrow-right text-muted"></i></a>
          </div>
        </div>
      </form><!-- /.lockscreen credentials -->

    </div><!-- /.lockscreen-item -->
    <div class="lockscreen-footer text-center" style="margin-top:100px">
      Copyright &copy; 2015 <b>Dinas Cipkataru Kudus</b><br>
      All rights reserved
    </div>
  </div><!-- /.center -->

@include('template.scripts')

</body>
</html>