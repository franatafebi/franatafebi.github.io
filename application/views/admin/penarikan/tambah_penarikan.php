<div class="box box-primary">
 <div class="box"></div>
    <!-- /.box-header -->
    <div class="box-body">
      <?=$this->session->flashdata('pesan')?>
      <div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>/Admin/Penarikan/simpan">
        </div>
      <div class="box-body">
                <div class="col-sm-7">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Id Penarikan</label>

                  <div class="col-sm-8">
                    <input type="text" name="id_penarikan" class="form-control" id="inputEmail3" placeholder="Id Penarikan">
                  </div>
                </div>
                </div>
                <div class="col-sm-5">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Nama Petugas</label>

                  <div class="col-sm-7">
                    <input type="text" name="petugas" class="form-control" id="inputEmail3" placeholder="Petugas" value="<?php echo $this->session->userdata('nama_lengkap')?>" readonly>
                  </div>
                </div>
                </div>
                <div class="box-body"></div>
                <div class="col-sm-7">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Id Nasabah</label>
                  <div class="col-sm-8">
                     
                     <select name="iduser" id="iduser" class='form-control' onchange="changeValue(this.value)" >
                        <option value=''>----Pilih Kategori----</option>";
                         <?php   
                        $jsArray = "var dtMhs = new Array();\n";        
                        foreach ($kampus->result() as $row_km) {  
                                          echo '<option name="iduser"  value="' . $row_km->iduser . '">' . $row_km->iduser . '</option>';  

                         $jsArray .= "dtMhs['" . $row_km->iduser . "'] = {nama_lengkap:'" . addslashes($row_km->nama_lengkap) . "',saldolama:'".addslashes($row_km->saldo)."'};\n"; 
                    }      
                    ?>    
                    </select>
                  </div>
                </div>
                </div>
               
                <div class="col-sm-5">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Tanggal</label>
                  <div class="col-sm-7">
                    <input type="text" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal" value="<?php $tgl=date('l, d-m-Y'); echo $tgl; ?>" readonly>
                  </div>
                </div>
             </div>
             <div class="box-body"></div>
             <div class="col-sm-7">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nama Nasabah</label>
                  <div class="col-sm-8">
                    <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="nama_lengkap" readonly>
                  </div>
                </div>
             </div>
             <div class="col-sm-5">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Saldo Sekarang</label>
                  <div class="col-sm-7">
                    <input type="text" name="saldo" class="form-control" id="saldo" placeholder="Saldo Sekarang" readonly>
                  </div>
                </div>
             </div>
             <div class="box-body"></div>
             <div class="col-sm-7">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Saldo Lama</label>
                  <div class="col-sm-8">
                    <input type="text" name="saldolama" class="form-control" id="saldolama" placeholder="Saldo Lama" readonly>
                  </div>
                </div>
             </div>
   
             <div class="box-body"></div>
             <div class="col-sm-7">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Jumlah Penarikan</label>

                  <div class="col-sm-7">
                    <input type="text" name="jumlah_penarikan" class="form-control" id="jumlah_penarikan" value="0" onchange="total(this.value)">
                  </div>
                </div>
             
          
          
              <!-- /.box-body -->
              <div class="box-body"></div>
              <div class="col-sm-10">
              <div class="footer">
                <a href="<?php echo base_url();?>index.php/Admin/Penarikan" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div></div></div>
              <!-- /.box-footer -->
    </form>
  </div>
  </div>
</div>
<link type="text/css" href="<?php echo base_url();?>assetsjs/themes/base/ui.all.css" rel="stylesheet" /> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/ui.core.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/ui.datepicker.js"></script>

<script type="text/javascript">
                        function total() {
                        

                        var saldo = parseFloat(document.getElementById('saldolama').value) - parseFloat(document.getElementById('jumlah_penarikan').value);
                        document.getElementById('saldo').value = saldo;
                    };
                    </script>

<script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal").datepicker({
    dateFormat  : "yyyy-mm-dd", 
          changeMonth : true,
          changeYear  : true
      
        });
      });
      
    
    </script>

 <script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(iduser){  
    document.getElementById('nama_lengkap').value = dtMhs[iduser].nama_lengkap; 
    document.getElementById('saldolama').value = dtMhs[iduser].saldolama;  
    };  
   
    </script>
