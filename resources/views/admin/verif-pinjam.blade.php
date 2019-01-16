<!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID Peminjaman</th>
                                            <th>Jenis Peminjaman</th>
                                            <th>Nama Karyawan</th>                                            
                                            <th>Unit Kerja</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pinjam as $p)
                                        <tr>
                                            <td>{{$p->kode_pinjam}}</td>
                                            <td><?php 
                                            if ($p->jenis ==0){
                                                echo "Personal";
                                            } else { 
                                                echo "Unit Kerja";
                                            } 
                                            ?></td>
                                            <td>{{$p->nama_karyawan}}</td>
                                            <td>{{$p->departemen}}</td>
                                            <td>{{$p->nama_apd}}</td>
                                            <td>{{$p->jumlah_apd}}</td>
                                            <td><?php echo date('d-m-Y', strtotime($p->tgl_pinjam)); ?></td>
                                            <td><button type="submit" class="btn btn-block btn-success">Pinjam</button></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>