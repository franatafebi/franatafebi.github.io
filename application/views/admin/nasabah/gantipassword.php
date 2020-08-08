  <div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Ganti Password</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <?php foreach ($kt->result() as $row) {?>
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Admin/Nasabah/editpassword" enctype = "multipart/form-data">
      <div class="box-body"></div></div>
      <input type="hidden" name="iduser" value="">
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Id User</label>

                  <div class="col-sm-10">
                    <input type="text" name="iduser" class="form-control" id="inputPassword3" value="<?php echo $row->iduser;?>" required readonly>
                  </div>
                </div>
                <div class="box-body"></diV>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password Lama</label>

                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3"  required>
                  </div>
                </div>
                <div class="box-body"></diV>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password Baru</label>

                  <div class="col-sm-10">
                    <input type="password" name="password_baru" class="form-control" id="inputPassword3" required>
                  </div>
                </div>
                 
                <div class="box-body"></diV>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Confirm Password</label>

                  <div class="col-sm-10">
                    <input type="password" name="konfirmasi_password" class="form-control" id="inputEmail3" required>
                  </div>
               
                <div class="box-body"></diV>
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/Admin/Nasabah" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div>
              <!-- /.box-footer -->
    </form>
    <?php } ?>
  </div>
</div>

