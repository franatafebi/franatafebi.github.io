
 <div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Kriteria Awal Penilaian Alternatif</h3> 
    </div>
 <!-- Main content -->
   
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Nasabah</th>
                  <th>Saldo</th>
                  <th>keaktifan</th>
                  
                </tr>
                </thead>
                <tbody>
               <?php 
               $no = 1;
              foreach ($dat->result() as $row) {
              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row->nama_lengkap;?></td>
                  <td><?php echo 'Rp '.number_format($row->saldo);?></td>
                  <td><?php echo $row->keaktifan;?></td>    
          </tr>
          <?php
      $no++;
      }
      ?>
    </table>
    </div>
<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Menentukan nilai kriteria</h3> 
    </div>
    <?php echo "<marquee><font size='5' color='red'>Nilai Kriteria = kriteria / (min kriteria) x 100</font></marquee>";?>
     <div class="box">
            <div class="box-header">
            </div>
      <div class="box-body">
              </table>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                
                  <th>Nama Nasabah</th>
                  <th>Saldo</th>
                  <th>keaktifan</th>
                  
              
                </tr>
                </thead>
                <tbody>
               <?php 

               $no = 1;
              foreach ($dat->result() as $low) foreach ($data->result() as $tow) foreach ($data1->result() as $mow) {
              
              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $low->nama_lengkap;?></td>
                  <td><?php echo 'Rp '.number_format($low->saldo); echo" &nbsp/&nbsp"; echo 'Rp '.number_format($tow->saldo); echo"&nbspx&nbsp"; echo "100";?></td>
                  <td><?php echo $low->keaktifan; echo" &nbsp/&nbsp"; echo $mow->keaktifan; echo"&nbspx&nbsp"; echo "100";?></td>
                  <td><?php ?></td>
                  
          </tr> 
          <?php
      $no++;
      }
      ?>
                <tr>
                  <th>Nilai Bobot</th>
                  <th></th>
                  <th><?php echo "0,4";?></th>
                  <th><?php echo "0,5";?></th>
                  <th></th>
                  
                </tr>
              </table>
            </div>

         
<div class="box box-primary">
  <div class="box-header">
       <h3 class="box-title">Mentukan Nilai Alternatif</h3> 
    </div>
    
            <?php echo "<marquee><font size='5' color='red'>Nilai Alternatif = (Nilai kriteria jumlah saldo x Nilai Bobot) + (nilai kriteria keaktifan x Nilai Bobot)</font></marquee>";?>
            
    
     <div class="box">
            <div class="box-header">
            </div>
    <div class="box-body">
              </table>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                
                  <th>Nama Nasabah</th>
                  <th>Saldo</th>
                  <th>keaktifan</th>
                
                </tr>
                </thead>
                <tbody>
               <?php 
               $no = 1;
              foreach ($dat->result() as $low) foreach ($data->result() as $kow) foreach ($data1->result() as $mow) {
              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $low->nama_lengkap;?></td>
                  <td><?php echo $low->saldo / $kow->saldo * 100;?></td>
                  <td><?php echo $low->keaktifan / $mow->keaktifan * 100; ?></td>
                  
          </tr> 
          <?php
      $no++;
      }
      ?>
                <tr>
                  <th>Nilai Bobot</th>
                  <th></th>
                  <th><?php echo "0,4";?></th>
                  <th><?php echo "0,5";?></th>
                  <th></th>
                  
                </tr>
              </table>
            </div>

    <div class="box box-primary">
  <div class="box-header">
       <h3 class="box-title">Hasil Perhitungan mentukan member terbaik</h3> <a style="margin-bottom:10px"> <a href="<?php echo base_url()."Admin/Cpi/cetak3/"?>" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
    </div>
    
     <div class="box">
            <div class="box-header">
            </div>
    <div class="box-body">
              </table>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                
                  <th>Nama Nasabah</th>
                  <th>Saldo</th>
                  <th>keaktifan</th>
                  <th>Nilai Alternatif</th>
                
                </tr>
                </thead>
                <tbody>
               <?php 
               $no = 1;
              foreach ($dat->result() as $low) foreach ($data->result() as $kow) foreach ($data1->result() as $mow) {
              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $low->nama_lengkap;?></td>
                  <td><?php echo $low->saldo / $kow->saldo * 100 * 0.4;?></td>
                  <td><?php echo $low->keaktifan / $mow->keaktifan * 100 * 0.5; ?></td>
                  <td><?php echo ($low->saldo / $kow->saldo * 100 * 0.4) + ($low->keaktifan / $mow->keaktifan * 100 * 0.5);?></td>
                  
          </tr> 
          <?php
      $no++;
      }
      ?>

              </table>
            </div>
            
      

 <div class="box box-primary">
    <div class="box-header">
          <h3 class="box-title"> Grafik Hasil Perhitungan Member Terbaik dengan metode CPI</h3>
      </div>
        <div class="box">
            <div class="box-header">
            </div>
             
      </div>
         
             <?php

                  foreach ($dat->result() as $low) foreach ($data->result() as $kow) foreach ($data1->result() as $mow) {
                      $merk[] = $low->nama_lengkap;
                      $stok[] = (float) ($low->saldo / $kow->saldo * 100 * 0.4) + ($low->keaktifan / $mow->keaktifan * 100 * 0.5);
                  }
              ?>



      <script type="text/javascript">
$(function () {
    $('#report').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: false,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Report Member Terbaik',
            style: {
                    fontSize: '18px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        subtitle: {
           text: 'Penjualan',
           style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories:  <?php echo json_encode($merk);?>
        },
        exporting: { 
            enabled: false 
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            },
        },
        tooltip: {
             formatter: function() {
                 return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0) + '</b>, in '+ this.series.name;
             }
          },
        series: [{
            name: 'Report Data',
            data: <?php echo json_encode($stok);?>,
            shadow : true,
            dataLabels: {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function() {
                     return Highcharts.numberFormat(this.y, 0);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
        </script>
    