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
                      <th>ID Barang</th>
                      <th>Nama Barang</th>
                      <th>Jumlah Tersedia</th>
                      <th>Jumlah Peminjaman</th>
                      <th>Tanggal Pinjam</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($apd as $a)
                      <tr>
                        <td>{{$a->kode_apd}}</td>
                        <td>{{$a->nama_apd}}</td>
                        <td>{{$a->jumlah_tersedia}}</td>
                        <td><div class="form-group">
                                <div class="col-sm-10">
                                    <input type="number" name="jumlah" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah peminjaman">
                                </div>
                            </div>
                        </td>
                        <form role="form">
                          <td>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="date" class="form-control" name="tanggal" placeholder="Ketikkan tanggal" name="trip-start">
                            </div>
                          </td>
                          <td><button type="button" class="btn btn-block btn-success">Pesan</button></td>
                        </form>
                      </tr>
                    @endforeach
            
                      </tfoot>
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