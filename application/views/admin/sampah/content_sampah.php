 <?php if($this->session->userdata('akses')=='1'):?>
 <div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Data Sampah &nbsp;&nbsp;</h3>
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
                  <th>Id Sampah</th>
                  <th>Nama Sampah</th>
                  <th>Harga</th>
                </tr>
                </thead>
                <tbody>
               <?php 
               $no = 1;
              foreach ($data->result() as $row) {
              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row->id_sampah;?></td>
                  <td><?php echo $row->nama_sampah;?></td>
                  <td><?php echo $row->harga;?></td>
                  
          </tr>
          <?php
      $no++;
      }
      ?>
              </table>
            </div>
<?php else:?>
   <div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Data Sampah &nbsp;&nbsp;
          <a href="<?php echo base_url()."Admin/Sampah/tambah/"?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a></h3>
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
                  <th>Id Sampah</th>
                  <th>Nama Sampah</th>
                  <th>Harga</th>
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
                  <td><?php echo $row->id_sampah;?></td>
                  <td><?php echo $row->nama_sampah;?></td>
                  <td><?php echo $row->harga;?></td>
                  <td>
            <a href="<?php echo base_url()."Admin/Sampah/update/".$row->id_sampah; ?>" class="btn btn-success btn-sm">Edit</a>
                  <a href="<?php echo base_url()."Admin/Sampah/hapus/".$row->id_sampah; ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
          </tr>
          <?php
      $no++;
      }
      ?>
              </table>
            </div>
<?php endif;?>            