<?php if($this->session->userdata('akses')=='1'):?>
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

  <h3>A. Identitas Diri </h3><?php foreach ($kt->result() as $row) {?>
          <img src="<?php echo base_url()?>images/<?php echo $row->foto;?>" align="right" width="150" height="200">
          Nama Lengkap                  : <?php echo $row->nama_lengkap; ?><br>
          Tempat, Tanggal Lahir         : <?php echo $row->ttl;?><br>
          Alamat                        : <?php echo $row->alamat;?><br>
          Agama                         : <?php echo $row->agama;?><br>
          Jenis Kelamin                 : <?php echo $row->jk;?><br>
          Pekerjaan                     : <?php echo $row->pekerjaan;?><br>
          Status                        : <?php echo $row->status;?><br>
          No. HP                        : <?php echo $row->notelpon;?><br>
          <a href="<?php echo base_url()."Admin/Nasabah/profil/"?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Update Profil</a>
          <?php } ?>
  <h3>B. Data Pengguna </h3><?php foreach ($kt->result() as $row) {?>
          Username                      : <?php echo $row->username;?><br>
          Password                      : <?php echo $row->password;?><br>
          <a href="<?php echo base_url()."Admin/Nasabah/gantipassword/"?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Ganti Password</a>
          <?php } ?>
        </div>
     
</pre>
    
</div>
</body>
</div>
</html>
 <?php else:?>

  <div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Data nasabah &nbsp;&nbsp;
          <a href="<?php echo base_url()."Admin/Nasabah/tambah/"?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a></h3>
    </div>
 <!-- Main content -->
   
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
              <table id="example" class="display nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Nasabah</th>
                  <th>Nama Nasabah</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <th>Foto</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               <?php 
               $no = 1;
              foreach ($data->result() as $row) {
              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row->iduser;?></td>
                  <td><?php echo $row->nama_lengkap;?></td>
                  <td><?php echo $row->jk;?></td>
                  <td><?php echo $row->alamat;?></td>
                  <td><?php echo $row->notelpon;?></td>
                  <td><img  src="<?php echo base_url()?>images/<?php echo $row->foto;?>"width="70" height="50"></td>
                  <td  method="post" action="<?php echo base_url();?>index.php/Admin/Pegawai/editlevel" enctype = "multipart/form-data">
                    
                    <?php if ($row->level == '0'):{?>
                      <a  href="<?php echo base_url()."Admin/Nasabah/editlevelaktif/".$row->iduser;?>" class="btn btn-success btn-sm">Konfirmasi</a>
                      <?php }elseif ($row->level == '1'):{ ?>
                      <a  href="<?php echo base_url()."Admin/Nasabah/editlevelnonaktif/".$row->iduser;?>" class="btn btn-success btn-sm" >Batal Konfirmasi</a>
                    <?php }endif; ?>
                  </td>
                  <td>
                  <a href="<?php echo base_url()."Admin/Nasabah/update/".$row->iduser; ?>" class="btn btn-success btn-sm">Edit</a>
                  <a href="<?php echo base_url()."Admin/Nasabah/hapus/".$row->iduser; ?>" class="btn btn-danger btn-sm">Delete</a>
                  <a href="<?php echo base_url()."Admin/Nasabah/detail/".$row->iduser; ?>" class="btn btn-success btn-sm">Detail</a>
          </td>
          </tr>
          <?php
      $no++;
      }
      ?>
              </table>
            
 <?php endif;?>