<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Pemantauan Sarana dan Prasarana</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


</head>
<body>
<div >
<div class="header">
<nav class="navbar navbar-inverse">
    <!-- Brand and toggle get grouped for better mobile display -->
    

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url('beranda/Beranda');?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Beranda</a></li>
        <li><a href="<?php echo site_url('ppdb/daftar');?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Profil</a></li>
        <li><a href="<?php echo site_url('gallery/gallery');?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Gallery</a></li>
        <li><a href="<?php echo site_url('registrasi/registrasi');?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Registrasi</a></li>
        
    <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Bantuan <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('ppdb/kontak');?>"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Kontak</a></li>
            
          </ul>
        </li>
      </ul>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('login');?>">Login</a></li>
        <li><a href="#<?php echo site_url('');?>">Kontak</a></li>
      </ul>
    </div>
  </div>
<!-- /.container-fluid -->
</nav>
</div>

<div class="main">
    <div class="main-content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <?php echo $judul; ?>  
      <small><?php echo $sub_judul; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard "></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="pull-right-container">
      <div class="pad margin no-print">  
         <?php $this->load->view($content);?>  
      </div>  
    </section>
    <!-- /.content -->
  </div>
</div>

<footer>
  <nav class="navbar navbar-inverse">
    <div class="pull-right hidden-xs">
      <font size="5"><b>Version</b> 1.0.0 </font>
    </div>
    <strong><font size="5">Copyright &copy; 2016-<?=date('Y')?> <a href="http://localhost/simantau">Febi Franata</a>.</font></strong><font size="5">All rights</font> 
  </nav>
</footer>
</body>
</html>



