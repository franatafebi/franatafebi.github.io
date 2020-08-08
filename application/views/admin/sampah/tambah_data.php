<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Tambah Data sampah</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>/Admin/Sampah/simpan" enctype = "multipart/form-data">
      <div class="box-body">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id Sampah</label>

                  <div class="col-sm-10">
                    <input type="text" name="id_sampah" class="form-control" id="inputEmail3" placeholder="Id Sampah">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Sampah</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_sampah" class="form-control" id="inputEmail3" placeholder="Nama sampah">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="text" name="harga" class="form-control" id="inputEmail3" placeholder="Harga">
                  </div>
                </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/Admin/Sampah" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div>
              <!-- /.box-footer -->
    </form>
  </div>
</div>