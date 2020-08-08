<html >
<head>
    <title><!-- Insert your title here --></title>

</head>
<style type="text/css">
body {
    
}
.bg {
     width: 100%;
     height: 70%;
     position: fixed;
     z-index: 1;
     float: left;
     left: 0;

}
.content {
	  color: black;
     width: 97%;
     height: 100;
     
     position: relative;
     z-index: 5;
     
     padding: 5px;
     text-align: justify;


}

</style>
<div class="box box-primary">
	<div class="box-header">
        <h3 class="box-title">Edit Propil</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
		<form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Admin/Nasabah/edit" enctype = "multipart/form-data">
			<div class="box-body"></div></div>
			<input type="hidden" name="iduser" value="<?php echo $b->iduser ?>">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Id Nasabah</label>

                  <div class="col-sm-10">
                    <input type="text" name="iduser" class="form-control" id="inputPassword3" value="<?php echo $b->iduser ?>">
                  </div>
                </div>
                <div class="box-body"></diV>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Nasabah</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama_lengkap" class="form-control" id="inputPassword3" value="<?php echo $this->session->userdata('nama_lengkap'); ?>">
                  </div>
                </div>
                <div class="box-body"></diV>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <input type="text" name="jk" class="form-control" id="inputPassword3" value="<?php echo $this->session->userdata('jk'); ?>">
                  </div>
                </div>
                <div class="box-body"></diV>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="inputEmail3" value="<?php echo $this->session->userdata('alamat'); ?>">
                  </div>
                </div>
                <div class="box-body"></diV>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No Telpon</label>

                  <div class="col-sm-10">
                    <input type="text" name="notelpon" class="form-control" id="inputEmail3" value="<?php echo $this->session->userdata('notelpon'); ?>">
                  </div>
                </div><div class="box-body"></diV>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Foto</label>

                  <div class="col-sm-10">
                   <input type="file" name="foto" class="form-control" id="foto" value="<?php echo $this->session->userdata('foto'); ?>">
                  </div>
                </div>
                <div class="box-body"></diV>
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/Admin/Nasabah" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div>
              <!-- /.box-footer -->
		</form>
	</div>
</div>
</body>
</html>





