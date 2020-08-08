<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Belajar jQuery Duniailkom</title>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
   $(document).ready(function() {
  
     $("#tambah").click(function() {
       var nilai = $("#nama_kota").val();
       var baris_baru = "<tr><td> <input type='text' id='nama_kota'></td></tr>";
       $("#tabel_kota").append(baris_baru);
     })
  
   });
   </script>
   <style>
   table {
     border-collapse:collapse;
     border-spacing:0;    
     border:1px black solid;
     margin-top: 20px;
   }
   th, td {
     padding:5px 10px;
     border:1px black solid;}
   th{
     background-color: #87F97B;
   }
   tr:nth-child(even) {
     background-color: #EDEDED;
   }
   tr:nth-child(odd) {
     background-color: #FFF;
   }
   </style>
</head>
<body>
Kota: <input type="text" id="nama_kota" value="Surabaya">
<button id="tambah">Tambah Kota</button>
<table id="tabel_kota">
   <tr><th>Nama Kota</th></tr>
   <tr><td>Bandung</td></tr>
   <tr><td>Jakarta</td></tr>
   <tr><td>Makasar</td></tr>
   <tr><td>Medan</td></tr>
</table>
</body>
</html>