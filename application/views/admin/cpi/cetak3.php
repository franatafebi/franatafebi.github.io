<html>
<head>
   <title>Cetak PDF</title>
   <style>
      table {
         border-collapse:collapse;
         table-layout:fixed;width: 630px;
         vertical-align: top;
      }
     
      tr    { vertical-align: top; }
      td    { vertical-align: top; }
       .style37 {
        font-size: 20px;
        font-weight: bold;
      }
      .style38 {font-size: 12px}
      .style14 {font-size: 10px}
      -->
   </style>

</head>
<body>
 
  
   
    <table style="width: 100%; text-align: center; font-size: 14px">
        <tr>
          <td style="width:7%" rowspan="4"><img src="<?php echo base_url();?>images/aca.jpg" alt="Logo" width="80" height="78"></td>
          <td style="width:80%">LAPORAN TRANSAKSI</td>
        </tr>
        <tr>
          <td class="style37">BANK SAMPAH JUNJUNG BIRRU</td>
        </tr>
        <tr>
          <td class="style38">Jl. Demak, Kel. Tuan Kentang, Jakabaring Palembang</td>
        </tr>
        <tr>
          <td class="style38">Telp. 081 2299 5054 </td>
        </tr>
    </table>
    <hr/>

<b><?php echo "Laporan Member Terbaik"; ?></b><br /><br />
    <br>
    <br>
   <table cellspacing="10" border="1" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
   <tr>
      <th style="width: 5%; text-align: center;">No</th>
      <th style="width: 25%; text-align: center;"><span style="width: 7%; text-align: center;">Nama Nasabah</span></th>
      <th style="width: 21%; text-align: center;"><span style="width: 7%; text-align: center;">Saldo</span></th>
      <th style="width: 21%; text-align: center;"><span style="width: 7%; text-align: center;">Keaktifan</span></th>
      <th style="width: 25%; text-align: center;"><span style="width: 16%; text-align: center;">Nilai Alternatif</span></th>

   </tr>

    <?php
      $no = 1;
      foreach ($dat->result() as $low) foreach ($data->result() as $kow) foreach ($data1->result() as $mow) {

        ?>
        <tr>
          <td style="width: 5%; text-align: center;"><?php echo $no; ?></td>
          <td style="width: 25%; text-align: center;"><span style="width: 7%; text-align: center;"><?php  echo $low->nama_lengkap; ?></span></td>
          <td style="width: 14%; text-align: center;"><span style="width: 7%; text-align: center;"><?php echo $low->saldo / $kow->saldo * 100 * 0.4; ?></span></td>
          <td style="width: 14%; text-align: center;"><span style="width: 7%; text-align: center;"><?php echo $low->keaktifan / $mow->keaktifan * 100 * 0.5; ?></span></td>
          <td style="width: 18%; text-align: center;"><span style="width: 16%; text-align: left;">   <?php echo ($low->saldo / $kow->saldo * 100 * 0.4) + ($low->keaktifan / $mow->keaktifan * 100 * 0.5); ?></span></td>
        </tr>
         <?php
        
         $no++;
    }
    ?>
   </table>
   <nobreak><br>
        <table cellspacing="0" style="width: 100%; text-align: left;">
            <tr>
                <td style="width:65%;"></td>
              <td style="width:35%; ">
                    <p>Palembang, <?php echo date('d-M-Y', time()); ?> <br>
                      Admin Regional </p>
                    <p>&nbsp;</p>
                    Andreanto<br />
            <hr/>
                      NIP. 192 12576 1 137        </td>
            </tr>
        </table>
    </nobreak>
</body>
</html>

