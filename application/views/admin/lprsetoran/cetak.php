<html>
<head>
   <title>Cetak PDF</title>
   <style>
      table {
         border-collapse:collapse;
         table-layout:fixed;width: 630px;
      }
      table td {
         word-wrap:break-word;
         width: 20%;
      }
   </style>
</head>
<body>
    <b><?php echo $ket; ?></b><br /><br />
    
   <table border="1" cellpadding="8">
   <tr>
      <th>Tanggal</th>
      <th>Id setor</th>
      <th>Nama Petugas</th>
      <th>Nama Nasabah</th>
      <th>Jumlah Setoran</th>
   </tr>

    <?php
    if( ! empty($transaksi)){
      $no = 1;
      foreach($transaksi as $data){
            $tgl = date('d-m-Y', strtotime($data->tanggal));

         echo "<tr>";
         echo "<td>".$tgl."</td>";
         echo "<td>".$data->id_setor."</td>";
         echo "<td>".$data->petugas."</td>";
         echo "<td>".$data->nama_lengkap."</td>";
         echo "<td>".$data->jumlah_setor."</td>";
         echo "</tr>";
         $no++;
      }
    }
    ?>
   </table>
</body>
</html>
