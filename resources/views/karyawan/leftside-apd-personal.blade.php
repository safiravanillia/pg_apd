<!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Nama Karyawan</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li><a href="{{URL::route('dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
          <li><a href="{{URL::route('kategori-personal')}}"><i class="fa fa-bar-chart"></i> <span>Kategori</span></a></li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Pesan APD</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('apd-personal/1') }}"><i class="fa fa-circle-o"></i> Kacamata Pengaman</a></li>
              <li><a href="{{ url('apd-personal/2') }}"><i class="fa fa-circle-o"></i> Pelindung Telinga</a></li>
              <li><a href="{{ url('apd-personal/3') }}"><i class="fa fa-circle-o"></i> Sepatu</a></li>
              <li><a href="{{ url('apd-personal/4') }}"><i class="fa fa-circle-o"></i> Helm</a></li>
              <li><a href="{{ url('apd-personal/5') }}"><i class="fa fa-circle-o"></i> Pakaian Pengaman</a></li>
              <li><a href="{{ url('apd-personal/6') }}"><i class="fa fa-circle-o"></i> Sarung Tangan</a></li>
              <li><a href="{{ url('apd-personal/7') }}"><i class="fa fa-circle-o"></i> Pelindung Wajah</a></li>
              <li><a href="{{ url('apd-personal/8') }}"><i class="fa fa-circle-o"></i> Lainnya</a></li>
            </ul>
          </li>

          <li><a href="{{ url('riwayat') }}"><i class="fa fa-book"></i> <span>Riwayat Pemesanan</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>