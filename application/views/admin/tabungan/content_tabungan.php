
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/morris.css">
<?php if($this->session->userdata('akses')=='1'):?>
    <div class="box box-primary">
  <div class="box-header">
        <h1 class="box-title">Data Tabungan &nbsp;&nbsp;
    </div>
 <!-- Main content -->
   
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php foreach ($kt->result() as $row) {?>
               <font  size ="8">Saldo Anda adalah </font> <b><font  size ="16" color="blue"><?php echo  'Rp '.number_format($row->saldo); ?></font></b><br><br>
               <?php } ?>
                <marquee><font  size ="6" color="red">"Silakan Tingkatkan Jumlah Saldo Anda....!!"</font></b><br> </marquee>
            </div>
<?php else:?>
  <div class="box box-primary">

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
                  <th>Id Tabungan</th>
                  <th>Nama Nasabah</th>
                  <th>Saldo</th>
                  <th>Keaktifan</th>
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
                  <td><?php echo 'Rp '.number_format($row->saldo);?></td>
                  <td><?php echo $row->keaktifan;?></td>
                  <td>
            <a href="<?php echo base_url()."Admin/Tabungan/update/".$row->iduser; ?>" class="btn btn-success btn-sm">Edit</a>
                  <a href="<?php echo base_url()."Admin/Tabungan/hapus/".$row->iduser; ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
          </tr>
          <?php
      $no++;
      }
      ?>
              </table>
            </div>
    
    <div class="box box-primary">
       <div class="box-header">
          <h3 class="box-title"> Grafik Data Tabungan Berdasarkan Saldo</h3>
      </div>
        <div class="box">
            <div class="box-header">
            </div>
             
      </div>
         
             <?php
                  foreach($data1 as $data){
                      $merk[] = $data->nama_lengkap;
                      $stok[] = (float) $data->saldo;
                  }
              ?>
      <canvas id="canvas" width="1000" height="280"></canvas>

      <!--Load chart js-->
      <script type="text/javascript" src="<?php echo base_url().'assets/chartjs/chart.min.js'?>"></script>
      <script>

                var lineChartData = {
                    labels : <?php echo json_encode($merk);?>,
                    datasets : [
                        
                        {
                            fillColor: "rgba(60,141,188,0.9)",
                            strokeColor: "rgba(60,141,188,0.8)",
                            pointColor: "#3b8bba",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(152,235,239,1)",
                            data : <?php echo json_encode($stok);?>
                        }

                    ]
                    
                }

            var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
            
        </script>
    </div>
<?php endif;?>
