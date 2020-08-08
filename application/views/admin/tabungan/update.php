<div class="box box-primary">
	<div class="box-header">
        <h3 class="box-title">Update Data Tabungan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <?php foreach($kampus as $b){ ?>
		<form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Admin/Tabungan/edit" enctype = "multipart/form-data">
    </diV>
			<div class="box-body">
			<input type="hidden" name="iduser" value="<?php echo $b->iduser ?>">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Id Tabungan</label>

                  <div class="col-sm-10">
                    <input type="text" name="iduser" class="form-control" id="inputPassword3" value="<?php echo $b->iduser ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Nasabah</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama_lengkap" class="form-control" id="inputPassword3" value="<?php echo $b->nama_lengkap ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Saldo</label>

                  <div class="col-sm-10">
                    <input type="text" name="saldo" class="form-control" id="inputPassword3" value="<?php echo $b->saldo ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Keaktifan</label>

                  <div class="col-sm-10">
                    <input type="text" name="keaktifan" class="form-control" id="inputPassword3" value="<?php echo $b->keaktifan ?>">
                  </div>
                </div>
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/Admin/Tabungan" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div>
              <!-- /.box-footer -->
            <?php } ?>
		</form>
	</div>
</div>