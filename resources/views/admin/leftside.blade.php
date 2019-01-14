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
                        <p>Admin</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li><a href="{{URL::route('dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Data APD</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{URL::route('apd')}}"><i class="fa fa-circle-o"></i> Kacamata Pengaman</a></li>
                            <li><a href="telinga3.html"><i class="fa fa-circle-o"></i> Pelindung Telinga</a></li>
                            <li><a href="sepatu3.html"><i class="fa fa-circle-o"></i> Sepatu</a></li>
                            <li><a href="helm3.html"><i class="fa fa-circle-o"></i> Helm</a></li>
                            <li><a href="pakaian3.html"><i class="fa fa-circle-o"></i> Pakaian Pengaman</a></li>
                            <li><a href="tangan3.html"><i class="fa fa-circle-o"></i> Sarung Tangan</a></li>
                            <li><a href="wajah3.html"><i class="fa fa-circle-o"></i> Pelindung Wajah</a></li>
                            <li><a href="lainnya3.html"><i class="fa fa-circle-o"></i> Lainnya</a></li>
                        </ul>
                    </li>

                    <li><a href="{{URL::route('riwayat')}}"><i class="fa fa-book"></i> <span>Riwayat Peminjaman</span></a></li>
                    <li><a href="{{URL::route('verifPinjam')}}"><i class="fa fa-book"></i> <span>Verifikasi Peminjaman</span></a></li>
                    <li><a href="{{URL::route('verifKembali')}}"><i class="fa fa-book"></i> <span>Verifikasi Pengembalian</span></a></li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>