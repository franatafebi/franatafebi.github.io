 <div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Data Pegawai &nbsp;&nbsp;
          <a href="<?php echo base_url()."Admin/Pegawai/tambah/"?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a></h3>
    </div>
 <!-- Main content -->
   
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Pegawai</th>
                  <th>Nama Pegawai</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <th>Foto</th>
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
                  <td><?php echo $row->idadmin;?></td>
                  <td><?php echo $row->nama_lengkap;?></td>
                  <td><?php echo $row->jk;?></td>
                  <td><?php echo $row->alamat;?></td>
                  <td><?php echo $row->notelpon;?></td>
                  <td><img  src="<?php echo base_url()?>images/<?php echo $row->foto;?>"width="70" height="50"></td>
                  <td>
            <a href="<?php echo base_url()."Admin/Pegawai/update/".$row->idadmin; ?>" class="btn btn-success btn-sm">Edit</a>
                  <a href="<?php echo base_url()."Admin/Pegawai/hapus/".$row->idadmin; ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
          </tr>
          <?php
      $no++;
      }
      ?>
              </table>
            </div>