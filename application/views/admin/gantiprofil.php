<?php if($this->session->userdata('akses')=='1'):?>
<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Ganti Fropil</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Admin/Gantiprofil/edituser" enctype = "multipart/form-data">
      <div class="box-body"></div></div>
            <input type="hidden" name="iduser" value="<?php echo $this->session->userdata('iduser'); ?>">
                <div class="box-body"></diV>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Foto</label>

                  <div class="col-sm-10">
                   <input type="file" name="foto" class="form-control" id="foto" required>
                  </div>
                </div>
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/Admin/Nasabah" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div>
              <!-- /.box-footer -->
    </form>
  </div>
</div>
<?php else:?>
<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Ganti Fropil</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Admin/Gantiprofil/edit" enctype = "multipart/form-data">
      <div class="box-body"></div></div>
            <input type="hidden" name="idadmin" value="<?php echo $this->session->userdata('idadmin'); ?>">
                <div class="box-body"></diV>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Foto</label>

                  <div class="col-sm-10">
                   <input type="file" name="foto" class="form-control" id="foto" required>
                  </div>
                </div>
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/Admin/Pegawai" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div>
              <!-- /.box-footer -->
    </form>
  </div>
</div>
<?php endif;?>