<div class="box box-primary">
	<div class="box-header">
        <h3 class="box-title">Update Data Sampah</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <?php foreach($sampah as $b){ ?>
		<form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Admin/Sampah/edit" enctype = "multipart/form-data">
			<div class="box-body">
      </div></div>
			<input type="hidden" name="id_sampah" value="<?php echo $b->id_sampah ?>">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Id Sampah</label>

                  <div class="col-sm-10">
                    <input type="text" name="id_sampah" class="form-control" id="inputPassword3" value="<?php echo $b->id_sampah ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Sampah</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama_sampah" class="form-control" id="inputPassword3" value="<?php echo $b->nama_sampah ?>">
                  </div>
                </div>
          
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Harga</label>

                  <div class="col-sm-10">
                    <input type="text" name="harga" class="form-control" id="inputPassword3" value="<?php echo $b->harga ?>">
                  </div>
                </div>
               
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/Admin/Sampah" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div>
              <!-- /.box-footer -->
            <?php } ?>
		</form>
	</div>
</div>