 <div class="box box-primary">
   <div class="box-header">
        <h3 class="box-title">Data Setoran &nbsp;&nbsp;<a href="<?php echo base_url()."Admin/Setoran/tambah/"?>"
        class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Transaksi</a></h3>
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
                  <th>Id Setoran</th>
                  <th>Nama Petugas</th>
                  <th>Nama Nasabah</th>
                  <th>Jumlah Setor</th>
                  <th>Tangal Setoran</th>
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
                  <td><?php echo $row->id_setor;?></td>
                  <td><?php echo $row->petugas;?></td>
                  <td><?php echo $row->nama_lengkap;?></td>
                  <td><?php echo 'Rp '.number_format($row->jumlah_setor);?></td>
                  <td><?php echo date('d F Y', strtotime($row->tanggal));?></td>
            
                  <td>
                  <a href="<?php echo base_url()."Admin/Setoran/hapus/".$row->id_setor; ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
          </tr>
          <?php
      $no++;
      }
      ?>
              </table>
            </div>