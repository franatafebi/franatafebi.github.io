 <div class="box box-primary">
 <div class="box"></div>
     <div class="box-body">
      <?=$this->session->flashdata('pesan')?>
      <div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>      
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>/Admin/Setoran/simpan">
      </div>
      <div class="box-body">
                <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Id Setoran</label>

                  <div class="col-sm-8">
                    <input type="text" name="id_setor" class="form-control" id="inputEmail3" placeholder="Id Setoran">
                  </div>
                </div>
                </div>
                 <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Nama Petugas</label>

                  <div class="col-sm-8">
                    <input type="text" name="petugas" class="form-control" id="inputEmail3" placeholder="Petugas" value="<?php echo $this->session->userdata('nama_lengkap')?>" readonly>
                  </div>
                </div>
                </div>
                <div class="box-body"></div>
                <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Id Nasabah</label>
                  <div class="col-sm-8">
                     
                     <select name="iduser" id="iduser" class='form-control' onchange="changeValue(this.value)" >
                        <option value=''>----Pilih Kategori----</option>";
                         <?php   
                        $jsArray = "var dtMhs = new Array();\n";        
                        foreach ($kampus->result() as $row_km) {  
                                          echo '<option name="iduser"  value="' . $row_km->iduser . '">' . $row_km->iduser . '</option>';  

                         $jsArray .= "dtMhs['" . $row_km->iduser . "'] = {nama_lengkap:'" . addslashes($row_km->nama_lengkap) . "',saldo:'".addslashes($row_km->saldo)."'};\n"; 
                    }      
                    ?>    
                    </select>
                  </div>
                </div>
                </div>
                
                <div class="col-sm-6">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Tanggal</label>

                  <div class="col-sm-8">
                    

                    <input type="text" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal" value="<?php $tgl=date('l, d-m-Y'); echo $tgl; ?>" readonly>


                  </div>
                </div>
             </div>
              <div class="box-body"></div>
             <div class="col-sm-6">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nama Nasabah</label>

                  <div class="col-sm-8">
                    <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama Nasabah" readonly required="">
                  </div>
                </div>
             </div>
             <div class="col-sm-6">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Saldo Sekarang</label>

                  <div class="col-sm-8">
                    <input type="text" name="newsaldo" class="form-control" id="newsaldo" placeholder="Saldo" readonly required="">
                  </div>
                </div>
             </div>
              <div class="box-body"></div>
             <div class="col-sm-6">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Saldo Lama</label>

                  <div class="col-sm-8">
                    <input type="text" name="saldo" class="form-control" id="saldo" placeholder="Saldo" readonly required="">
                  </div>
                </div>
             </div>
              <div class="box-body"></div>
            <div class="col-sm-6">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Jumlah Setor</label>

                  <div class="col-sm-8">
                    <input type="text" name="jumlah_setor" id="jumlah_setor" class="form-control"  readonly onchange="total()" required="">
                  </div>
                </div>
             </div>
             <div class="col-sm-10">
              <div class="pooter">
                <a href="<?php echo base_url();?>index.php/Admin/Setoran" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div>
              </div>

        <!-- /.box-footer -->
    </form>
    <div class="box-body"></div>
    <div class="box-body">
<div class="form-group">
    <table id="example1" class="display nowrap" style="width:50%">
                <thead>
                <tr>
                  <th>Nama Sampah</th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th>Sub Total</th>
                  
                  
                  
                </tr>
                </thead>
                <tbody>
               <?php 
              $total=0;
              foreach ($kampus1->result() as $row) {

            
              ?>
                <tr>
                 
                  <td><?php echo $row->nama_sampah;?></td>
                  <td><?php echo $row->harga;?></td>
                  <td><input type="number" style="width:100px;" name="<?php echo $row->id_sampah; ?>" id="<?php echo $row->id_sampah; ?>" value="0"  onchange="total()"></td>
                  <td><input type="text" style="width:100px;" name="total.<?php echo $row->id_sampah; ?>" id="total.<?php echo $row->id_sampah; ?>" value="0"  onchange="jumlah()" readonly></td> 
                  
                  
                  
                
          </tr>
          <?php
      }
      ?>
     
              </table>
      </div>
</div>
      </div>



             <script type="text/javascript">
                       
                        function total() {
                         
                          <?php 
                            foreach ($kampus1->result() as $row) {
                            
                            $hrga = $row->harga;
                            $gg = $row->id_sampah;
                            $pattern = '/([^0-9]+)/';
                            $hra = preg_replace($pattern,'',$hrga);
                            ?>
                        
                        var totalhrg = <?php echo $hra; ?> * parseFloat(document.getElementById('<?php echo $row->id_sampah; ?>').value);
                        document.getElementById('total.<?php echo $row->id_sampah; ?>').value = totalhrg;

                        <?php } ?>
                     
                        var total = 0;
                        <?php 
                            foreach ($kampus1->result() as $row) {
                            
                            $hrga = $row->harga;
                            $gg = $row->id_sampah;
                            $pattern = '/([^0-9]+)/';
                            $hra = preg_replace($pattern,'',$hrga);
                            ?>
                        total = total + (<?php echo $hra; ?> * parseFloat(document.getElementById('<?php echo $row->id_sampah; ?>').value));
                        
                        document.getElementById('jumlah_setor').value = total;                          
                        <?php } ?>
                        var saldonew = parseInt(document.getElementById('saldo').value) + parseInt(document.getElementById('jumlah_setor').value);
                        document.getElementById('newsaldo').value = saldonew;                        
                        };
             </script>
             <script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
             <script type="text/javascript">
             
             </script>

<link type="text/css" href="<?php echo base_url();?>assetsjs/themes/base/ui.all.css" rel="stylesheet" /> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-a.3.3.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/ui.core.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/ui.datepicker.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/datetimepicker/jquery.datetimepicker.css"/>
<script src="<?php echo base_url();?>assets/plugins/datetimepicker/jquery.datetimepicker.js"></script>


</div>
  

 <script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(iduser){  
    document.getElementById('nama_lengkap').value = dtMhs[iduser].nama_lengkap; 
    document.getElementById('saldo').value = dtMhs[iduser].saldo;  
    };  
   
    </script>






    

