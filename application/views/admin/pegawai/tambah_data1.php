<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Tambah Data Pegawai</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>/Admin/Pegawai/simpan" enctype = "multipart/form-data">
      <div class="box-body">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id Pegawai</label>

                  <div class="col-sm-10">
                    <input type="text" name="idadmin" class="form-control" id="inputEmail3" placeholder="Id Pegawai">
                  </div>
                </div>
                <div class="box-body"></diV>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="inputEmail3" required>
                  </div>
                </div>
                <div class="box-body"></diV>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputEmail3" required>
                  </div>
                </div>
                <div class="box-body"></diV>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Pegawai</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_lengkap" class="form-control" id="inputEmail3" placeholder="Nama pegawai">
                  </div>
                </div>
                <div class="box-body"></diV>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <fieldset>
                         <label class="radio-inline">
                            <input type="radio" name="jk" value="Laki-laki"/>Laki-laki
                         </label>
                         <label class="radio-inline">
                            <input type="radio" name="jk" value="Perempuan"/>Perempuan
                         </label>
                    </fieldset>
                  </div>
                </div>
                <div class="box-body"></diV>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" id="inputEmail3" placeholder="Alamat" required=""></textarea>
                  </div>
                </div>
                <div class="box-body"></diV>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No Telpon</label>
                  <div class="col-sm-10">
                    <input type="text" name="notelpon" class="form-control" id="inputEmail3" placeholder="No Telpon" required="">
                  </div>
                </div>
                <div class="box-body"></diV>
                <div class="form-group">
                  <label for="fotobarang" class="col-sm-2 control-label">Foto</label>
                  <div class="col-sm-10">
                    <input type="file" name="foto" class="form-control" id="foto" required="">
                  </div>
                </div>
                <div class="box-body"></diV>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/Admin/Pegawai" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div>
              <!-- /.box-footer -->
    </form>
  </div>
</div>