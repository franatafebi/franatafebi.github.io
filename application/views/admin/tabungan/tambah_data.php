<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Tambah Data Tabungan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <?=$this->session->flashdata('pesan')?>
      <div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>/Admin/Tabungan/simpan">
      </div>
      <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id</label>

                  <div class="col-sm-10">
                    <input type="text" name="iduser" class="form-control" id="inputEmail3" placeholder="Id">
                  </div>
                </div>
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Nasabah</label>
                  <div class="col-sm-10">
                     <?php
                    echo "
                    <select name='nama_lengkap' id='nama_lengkap' class='form-control'>
                     <option value=''>----Pilih Kategori----</option>";
                      foreach ($kampus->result() as $row_km) {  
                      echo "<option value='".$row_km->nama_lengkap."'>".$row_km->nama_lengkap."</option>";
                      }
                      echo"
                    </select>";
                    ?>
                  </div>
                </div>
               
                <div class="form-group"> 
                  <label for="inputEmail3" class="col-sm-2 control-label">Saldo</label>

                  <div class="col-sm-10">
                    <input type="text" name="saldo" class="form-control" id="inputEmail3" placeholder="Saldo">
                  </div>
                </div>
                
          
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/Admin/Tabungan" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div>
              <!-- /.box-footer -->
    </form>
  </div>
</div>
