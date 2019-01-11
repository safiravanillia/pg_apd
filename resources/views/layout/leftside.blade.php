<!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Nama Karyawan</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li><a href="{{URL::route('dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
          <li><a href="{{URL::route('riwayat')}}"><i class="fa fa-book"></i> <span>Riwayat Pemesanan</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
