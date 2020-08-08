<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<div class="box-primary">
 <div class="box"></div>
<body>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo base_url();?>images/a1.jpg">
      <img src="<?php echo base_url();?>images/a1.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Kunjungan Mahasiswa Universitas Sriwijaya Fakultas Kedokteran dalam program bersih itu sehat</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo base_url();?>images/a2.jpg">
      <img src="<?php echo base_url();?>images/a2.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Perhargaan yang diperoleh Bank Sampah Junjung Birru</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo base_url();?>images/a3.jpg">
      <img src="<?php echo base_url();?>images/a3.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Salah Satu hasil kerajinan dari sampah plastik</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo base_url();?>assets/dist/img/avatar04.png">
      <img src="<?php echo base_url();?>assets/dist/img/avatar5.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
<div class="box-body"></diV>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo base_url();?>assets/dist/img/avatar04.png">
      <img src="<?php echo base_url();?>assets/dist/img/avatar5.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo base_url();?>assets/dist/img/avatar04.png">
      <img src="<?php echo base_url();?>assets/dist/img/avatar5.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo base_url();?>assets/dist/img/avatar04.png">
      <img src="<?php echo base_url();?>assets/dist/img/avatar5.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo base_url();?>assets/dist/img/avatar04.png">
      <img src="<?php echo base_url();?>assets/dist/img/avatar5.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="clearfix"></div>

<div style="padding:6px;">
 
</div>

</body>
</html>
