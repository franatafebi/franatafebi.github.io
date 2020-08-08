<html>
<style type="text/css">
body {
    
}
.content {
    color: black;
     width: 95%;
     height: 100;
     
     position: relative;
     
     padding: 25px;
     text-align: justify;


}
</style>
<div class="box-primary">
<body>
<pre><div class="content">
  <h3>A. Identitas Diri </h3><?php foreach ($nasabah as $row) {?><img src="<?php echo base_url()?>images/<?php echo $row->foto;?>" align="right" width="250" height="300">
          Nama Lengkap                  : <?php echo $row->nama_lengkap; ?><br>
          Tempat, Tanggal Lahir         : <?php echo $row->ttl;?><br>
          Alamat                        : <?php echo $row->alamat;?><br>
          Agama                         : <?php echo $row->agama;?><br>
          Jenis Kelamin                 : <?php echo $row->jk;?><br>
          Pekerjaan                     : <?php echo $row->pekerjaan;?><br>
          Status                        : <?php echo $row->status;?><br>
          No. HP                        : <?php echo $row->notelpon;?><br>
  
          <?php } ?>

        </div>
     
</pre>
    
</div>
</body>
</div>
</html>