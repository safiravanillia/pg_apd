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
                                            <th>Jumlah Stok</th>
                                            <th>Jumlah Tersedia</th>
                                            <th>Masa Peminjaman</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Misc</td>
                                            <td>NetFront 3.4</td>
                                            <td>Embedded devices</td>
                                            <td>Embedded devices</td>
                                            <td>NetFront 3.4</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#modal-default">Ubah</button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Misc</td>
                                            <td>Dillo 0.8</td>
                                            <td>Embedded devices</td>
                                            <td>Embedded devices</td>
                                            <td>NetFront 3.4</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#modal-default">Ubah</button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Misc</td>
                                            <td>NetFront 3.4</td>
                                            <td>Embedded devices</td>
                                            <td>Embedded devices</td>
                                            <td>NetFront 3.4</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#modal-default">Ubah</button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Misc</td>
                                            <td>Links</td>
                                            <td>Text only</td>
                                            <td>NetFront 3.4</td>
                                            <td>Embedded devices</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#modal-default">Ubah</button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </td>
                                        </tr>
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

                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- form start -->
                            <form class="form-horizontal">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="inputkode" class="col-sm-2 control-label">Kode</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="kode" class="form-control" id="inputkode"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputnama" class="col-sm-2 control-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama" class="form-control" id="inputnama"
                                                placeholder="Masukkan Nama Barang">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputjumlah" class="col-sm-2 control-label">Jumlah</label>

                                        <div class="col-sm-10">
                                            <input type="number" name="jumlah" class="form-control" id="inputjumlah"
                                                placeholder="Masukkan jumlah stok">
                                        </div>
                                    </div>

                                    <!-- /.box-body -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                        <button type="submit" class="btn btn-info pull-right">Simpan</button>
                                    </div>
                                    <!-- /.box-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="modal-primary">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputkode" class="col-sm-2 control-label">Kode</label>
                                <div class="col-sm-10">
                                    <input type="number" name="kode" class="form-control" id="inputkode" placeholder="Masukkan kode barang">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputnama" class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" id="inputnama" placeholder="Masukkan Nama Barang">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputjumlah" class="col-sm-2 control-label">Jumlah</label>

                                <div class="col-sm-10">
                                    <input type="number" name="jumlah" class="form-control" id="inputjumlah"
                                        placeholder="Masukkan jumlah stok">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputmasa" class="col-sm-2 control-label">Masa</label>

                                <div class="col-sm-10">
                                    <input type="number" name="jumlah" class="form-control" id="inputmasa" placeholder="Masukkan masa peminjaman">
                                </div>
                            </div>

                            <!-- /.box-body -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-info pull-right">Simpan</button>
                            </div>
                            <!-- /.box-footer -->
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    </section>