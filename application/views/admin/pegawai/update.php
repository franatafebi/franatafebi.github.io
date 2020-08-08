<div class="box box-primary">
	<div class="box-header">
        <h3 class="box-title">Update Data Pegawai</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <?php foreach($pegawai as $b){ ?>
		<form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Admin/Pegawai/edit" enctype = "multipart/form-data">
			<div class="box-body">
      </div></div>
			<input type="hidden" name="idadmin" value="<?php echo $b->idadmin ?>">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Id Pegawai</label>

                  <div class="col-sm-10">
                    <input type="text" name="idadmin" class="form-control" id="inputPassword3" value="<?php echo $b->idadmin ?>" required>
                  </div>
                </div>
                <div class="box-body"></diV>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Pegawai</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama_lengkap" class="form-control" id="inputPassword3" value="<?php echo $b->nama_lengkap ?>" required>
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
                    <input type="text" name="alamat" class="form-control" id="inputEmail3" value="<?php echo $b->alamat ?>" required>
                  </div>
                </div>
                <div class="box-body"></diV>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No Telpon</label>

                  <div class="col-sm-10">
                    <input type="text" name="notelpon" class="form-control" id="inputEmail3" value="<?php echo $b->notelpon ?>" required>
                  </div>
                </div>
                
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/Admin/Pegawai" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div>
              <!-- /.box-footer -->
            <?php } ?>
		</form>
	</div>
</div>