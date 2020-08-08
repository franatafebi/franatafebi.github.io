<div class="box box-primary">
	<div class="box-header">
        <h3 class="box-title">Update Data Penarikan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <?php foreach($penarikan as $b){ ?>
		<form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Admin/Penarikan/edit">
			<div class="box-body">
			<input type="hidden" name="id_penarikan" value="<?php echo $b->id_penarikan ?>">
      
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Id Penarikan</label>

                  <div class="col-sm-10">
                    <input type="text" name="id_penarikan" class="form-control" id="inputPassword3" value="<?php echo $b->id_penarikan ?>">
                  </div>
                </div>
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Nasabah</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama_nasabah" class="form-control" id="inputPassword3" value="<?php echo $b->nama_nasabah ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Penarikan</label>
                  <div class="col-sm-10">
                    <input type="text" name="jumlah_penarikan" class="form-control" id="inputPassword3" value="<?php echo $b->jumlah_penarikan ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tanggal</label>

                  <div class="col-sm-10">
                    <input type="text" name="tanggal" class="form-control" id="inputPassword3" value="<?php echo $b->tanggal ?>">
                  </div>
                </div>
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/Admin/Penarikan" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div>
              <!-- /.box-footer -->
            <?php } ?>
		</form>
	</div>
</div>