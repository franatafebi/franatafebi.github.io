<?php if($this->session->userdata('akses')=='1'):?>
<html>
<head>
  <title>PDF</title>
    
 
    <link rel="stylesheet" href="<?php echo base_url('assets/jquery-ui/jquery-ui.min.css'); ?>" /> <!-- Load file css jquery-ui -->
    <script src="<?php echo base_url('assets/jquery.min.js'); ?>"></script>
</head>
<body>
<div class="box box-primary">
 <div class="box"></div>
     <div class="box-body">     
    <form class="form-horizontal" method="get" action="">
      </div>
      <div class="box-body">    
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Filter Berdasarkan</label>
                  <div class="col-sm-3">
                     <select name="filter" id="filter" class='form-control'>
                        <option value=''>----Pilih Kategori----</option>";
                            <option value="1">Per Tanggal</option>
                            <option value="2">Per Bulan</option>
                            <option value="3">Per Tahun</option>
                     </select>                   
                  </div>
                    <button type="submit" class="btn btn-info btn-sm">Tampilkan</button>
                    <a href="<?php echo base_url();?>index.php/Admin/Lprtransaksi" class="btn btn-danger btn-sm">Reset Filter</a>   
                  </div>
                  </div>
                   <div class="box-body">
                  <div id="form-tanggal">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-3">  
                          <input type="text" name="tanggal" class="input-tanggal" />
                      </div>     
                  </div>
                  </div>
                  <div class="box-body">
                  <div id="form-bulan">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Bulan</label>
                  <div class="col-sm-3">   
                     <select name="bulan" id="bulan" class='form-control'>
                        <option value=''>----Pilih Kategori----</option>";
                            <option value="">Pilih</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                     </select>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="box-body">
                  <div id="form-tahun">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tahun</label>
                  <div class="col-sm-3">
                    <select name="tahun" id="tahun" class='form-control'>
                        <option value=''>----Pilih Kategori----</option>";
                        <?php
                        foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
                            echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                        }
                        ?>
                    </select>
                    
                  </div>      
                  </div>
                  </div>
                
        
                 

        </div>
    </form>
   

 <div class="box-body"></div>
 <div class="box"></div><a href="<?php echo $url_cetak; ?>"> &nbsp;&nbsp;<span class='glyphicon glyphicon-print'></span>  Cetak</a><div class="box-body"></div>
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Transaksi</th>
                  <th>Nama Petugas</th>
                  <th>Nama Nasabah</th>
                  <th>Debit</th>
                  <th>Kredit</th>
                  <th>Tanggal</th>
                  <th>Saldo</th>
                </tr>
                </thead>
                <tbody>
               <?php
                if( ! empty($transaksi)){
                  $no = 1;
                  foreach($transaksi as $row){
                        $tgl = date('d-m-Y', strtotime($row->tanggal));
                ?>  
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row->id_transaksi;?></td>
                  <td><?php echo $row->petugas;?></td>
                  <td><?php echo $row->nama_lengkap;?></td>
                  <td><?php echo 'Rp '.number_format($row->jumlah_setor);?></td>
                  <td><?php echo 'Rp '.number_format($row->jumlah_penarikan);?></td>
                  <td><?php echo $tgl;?></td>
                  <td><?php echo 'Rp '.number_format($row->saldo);?></td>
          </tr>
          <?php
      $no++;
        }
      }
      ?>
              </table>
            </div>

</div>
</div> 
    
    
     <!-- Load file plugin js jquery-ui -->
    <script src="<?php echo base_url('assets/jquery-ui/jquery-ui.min.js'); ?>"></script>
    <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });

        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }

            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })


    </script>


</table>
</body>
</html>

<?php else:?>
<html>
<head>
  <title>PDF</title>
    
    <link rel="stylesheet" href="<?php echo base_url('assets/jquery-ui/jquery-ui.min.css'); ?>" /> <!-- Load file css jquery-ui -->
    <script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script> <!-- Load file jquery -->
</head>
<body>
<div class="box box-primary">
 <div class="box"></div>
     <div class="box-body">     
    <form class="form-horizontal" method="get" action="">
      </div>
      <div class="box-body">    
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Filter Berdasarkan</label>
                  <div class="col-sm-3">
                     <select name="filter" id="filter" class='form-control'>
                        <option value=''>----Pilih Kategori----</option>";
                            <option value="1">Per Tanggal</option>
                            <option value="2">Per Bulan</option>
                            <option value="3">Per Tahun</option>
                     </select>                   
                  </div>
                    <button type="submit" class="btn btn-info btn-sm">Tampilkan</button>
                    <a href="<?php echo base_url();?>index.php/Admin/Lprtransaksi" class="btn btn-danger btn-sm">Reset Filter</a>   
                  </div>
                  </div>
                   <div class="box-body">
                  <div id="form-tanggal">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-3">  
                          <input type="text" name="tanggal" class="input-tanggal" />
                      </div>     
                  </div>
                  </div>
                  <div class="box-body">
                  <div id="form-bulan">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Bulan</label>
                  <div class="col-sm-3">   
                     <select name="bulan" id="bulan" class='form-control'>
                        <option value=''>----Pilih Kategori----</option>";
                            <option value="">Pilih</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                     </select>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="box-body">
                  <div id="form-tahun">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tahun</label>
                  <div class="col-sm-3">
                    <select name="tahun" id="tahun" class='form-control'>
                        <option value=''>----Pilih Kategori----</option>";
                        <?php
                        foreach($option_tahun1 as $data){ // Ambil data tahun dari model yang dikirim dari controller
                            echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                        }
                        ?>
                    </select>
                    
                  </div>      
                  </div>
                  </div>
                
        
                 

        </div>
    </form>
   

 <div class="box-body"></div>
 <div class="box"></div><a href="<?php echo $url_cetak; ?>"> &nbsp;&nbsp;<span class='glyphicon glyphicon-print'></span>  Cetak</a><div class="box-body"></div>
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Transaksi</th>
                  <th>Nama Petugas</th>
                  <th>Nama Nasabah</th>
                  <th>Debit</th>
                  <th>Kredit</th>
                  <th>Tanggal</th>
                  <th>Saldo</th>
                </tr>
                </thead>
                <tbody>
               <?php
                if( ! empty($transaksiadmin)){
                  $no = 1;
                  foreach($transaksiadmin as $row){
                        $tgl = date('d-m-Y', strtotime($row->tanggal));
                ?>  
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row->id_transaksi;?></td>
                  <td><?php echo $row->petugas;?></td>
                  <td><?php echo $row->nama_lengkap;?></td>
                  <td><?php echo 'Rp '.number_format($row->jumlah_setor);?></td>
                  <td><?php echo 'Rp '.number_format($row->jumlah_penarikan);?></td>
                  <td><?php echo $tgl;?></td>
                  <td><?php echo 'Rp '.number_format($row->saldo);?></td>
          </tr>
          <?php
      $no++;
        }
      }
      ?>
              </table>
            </div>

</div>
</div> 
    
    
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> <!-- Load file plugin js jquery-ui -->
    <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });
        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya
        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }
            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
    </script>
</table>
</body>
</html>
 <?php endif;?>