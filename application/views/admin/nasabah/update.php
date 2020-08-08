  <div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Update Data nasabah</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <?php foreach($nasabah as $b){ ?>
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Admin/Nasabah/edit" enctype = "multipart/form-data">
      <div class="box-body"></div></div>
      <input type="hidden" name="iduser" value="<?php echo $b->iduser ?>">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Id Nasabah</label>

                  <div class="col-sm-10">
                    <input type="text" name="iduser" class="form-control" id="inputPassword3" value="<?php echo $b->iduser ?>" required>
                  </div>
                </div>
                <div class="box-body"></diV>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="inputEmail3" value="<?php echo $b->username ?>" required>
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
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Nasabah</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama_lengkap" class="form-control" id="inputPassword3" value="<?php echo $b->nama_lengkap ?>" required>
                  </div>
                </div>
                <div class="box-body"></diV>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tempat, Tanggal Lahir</label>

                  <div class="col-sm-10">
                    <input type="text" name="ttl" class="form-control" id="inputPassword3" value="<?php echo $b->ttl ?>" required>
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
                  <label for="inputPassword3" class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-10">
                    <fieldset>
                         <label class="radio-inline">
                            <input type="radio" name="agama" value="Islam"/>Islam
                         </label>
                         <label class="radio-inline">
                            <input type="radio" name="agama" value="Kristen Katolik"/>Kristen Katolik
                         </label>
                         <label class="radio-inline">
                            <input type="radio" name="agama" value="Kristen Katolik"/>Kristen Katolik
                         </label>
                         <label class="radio-inline">
                            <input type="radio" name="agama" value="Buddha"/>Buddha
                         </label>
                         <label class="radio-inline">
                            <input type="radio" name="agama" value="Khonghucu"/>Khonghucu
                         </label>
                         </fieldset>
                  </div>
                </div>
                <div class="box-body"></diV>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" id="inputEmail3" value="<?php echo $b->alamat ?>" required></textarea>
                  </div>
                </div>
                <div class="box-body"></diV>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                      <fieldset>
                         <label class="radio-inline">
                            <input type="radio" name="status" value="Belum Kawin"/>Belum Kawin
                         </label>
                         <label class="radio-inline">
                            <input type="radio" name="status" value="Kawin"/>Kawin
                         </label>
                         <label class="radio-inline">
                            <input type="radio" name="status" value="Duda"/>Duda
                         </label>
                         <label class="radio-inline">
                            <input type="radio" name="status" value="Janda"/>Janda
                         </label>                        
                         </fieldset>
                  </div>
                </div>
                <div class="box-body"></diV>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Pekerjaan</label>

                  <div class="col-sm-10">
                    <input type="text" name="pekerjaan" class="form-control" id="inputEmail3" value="<?php echo $b->pekerjaan ?>" required>
                  </div>
                </div>
                <div class="box-body"></diV>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No Telpon</label>

                  <div class="col-sm-10">
                    <input type="text" name="notelpon" class="form-control" id="inputEmail3" value="<?php echo $b->notelpon ?>" required>
                  </div>
                <div class="box-body"></diV>
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/Admin/Nasabah" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div>
              <!-- /.box-footer -->
            <?php } ?>
    </form>
  </div>
</div>

