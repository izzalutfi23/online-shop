<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Produk</h3><br><br>
          <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Tambah</button>

          <!-- Modal tambah data -->
          <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Data Kategori</h4>
                  </div>
                  <div class="modal-body">
                    <form action="proses.php?proses=add_barang" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kategori</label>
                        <select name="id_kategori" class="form-control">
                          <option value="0">--Pilih Kategori--</option>
                          <?php 
                            include '../koneksi.php';
                            $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                            while($dk = mysqli_fetch_array($query)){
                           ?>
                           <option value="<?=$dk['id_kategori'];?>"><?=$dk['nama_kategori'];?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Foto</label>
                        <input type="file" name="foto" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Stok</label>
                        <input type="number" name="stok" class="form-control" placeholder="Masukkan Jumlah Stok">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Harga</label>
                        <input type="number" name="harga" class="form-control" placeholder="Masukkan Harga Barang">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Diskon (jika ada)</label>
                        <input type="number" name="diskon" class="form-control" value="0">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi"></textarea>
                      </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- /Modal tambah data -->


          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Barang</th>
                  <th>Kategori</th>
                  <th>Foto</th>
                  <th>Stok</th>
                  <th>Harga</th>
                  <th>Diskon</th>
                  <th>Deskripsi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                $qb = mysqli_query($koneksi, "SELECT * FROM barang");
                while($db = mysqli_fetch_array($qb)){
                 ?>
                <tr>
                  <td><?=$no++;?></td>
                  <td><?=$db['nama_barang'];?></td>
                  <td><?=$db['nama_barang'];?></td>
                  <td><img width="60px" height="70" src="../img/produk/<?=$db['foto'];?>"></td>
                  <td><?=$db['stok'];?></td>
                  <td><?=$db['harga'];?></td>
                  <td><?=$db['diskon'];?></td>
                  <td><?=$db['deskripsi'];?></td>
                  <td>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#edit1"><i class="fa fa-edit"></i></button>
                    <a href="#"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                  </td>
                </tr>
                <!-- Modal Edit data -->
                <div class="modal fade" id="edit1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Edit Data Kategori</h4>
                        </div>
                        <div class="modal-body">
                          <form action="" method="post">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                  <!-- /Modal Edit data -->
                <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>