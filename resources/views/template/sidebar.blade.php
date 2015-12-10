<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset("/images/kudus.png") }}" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Cipkataru</p>
          <p>admin</p>
      </div>
    </div>
  
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MENU NAVIGASI</li>
      <li>
        <a href="/">
          <i class="fa fa-th"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder"></i>
          <span>Master</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="/masterinduk"><i class="fa fa-circle-o"></i> Data Induk</a></li>
          <li><a href="/masterlahan"><i class="fa fa-circle-o"></i> Data Lahan</a></li>
          <li><a href="/kecamatan"><i class="fa fa-circle-o"></i> Kecamatan</a></li>
          <li><a href="/desa"><i class="fa fa-circle-o"></i> Desa/Kelurahan</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-file"></i>
          <span>Laporan</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="/monitoring"><i class="fa fa-circle-o"></i> Komparasi Tahunan</a></li>
        </ul>
      </li>
      <li>
        <a href="/users">
          <i class="fa fa-user"></i> <span>User</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>