<!DOCTYPE html>  
<html lang="en">  
<head>  
<title>Registration</title>  
   <meta charset="utf-8">  
   <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
   <!-- Latest compiled and minified CSS -->  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >  
   <style type="text/css">  
    .form-box{  
 max-width: 500px;  
 position: relative;  
 margin: 5% auto;  }  
 .bg {
     width: 100%;
     height: 70%;
     position: fixed;
     z-index: 1;


}
.content {
     width: 100%;
     height: auto;
     margin: 0 auto;
     position: relative;
     z-index: 5;
     padding: 10px;
     text-align: justify;

}

</style>  
</head>
<img src="<?php echo base_url();?>images/aca.jpg" alt="gambar" class="bg" />
<div class="content">
<div class="box-primary">
 <div class="box"></div>  
  <body>  
   <div class="wrapper">  
    <div class="container">  
     <div class="row">  
      <div class="form-box">  
       <div class="panel panel-primary">  
        <div class="panel-heading text-center">  
          <h1>Pendaftaran</h1>  
        </div>  
        <div class="panel-body">  
         <div class="row">  
           <div class="col-sm-12">  
             <?php echo $this->session->flashdata('msg'); ?>  
           </div>  
         </div>  
         <form action="<?php echo base_url();?>Registrasi/daftar" method="post">  
          <div class="row">  
           <div class="col-sm-6">  
            <div class="form-group">  
                    <label class="control-label" for="fname">First Name</label>  
                      <div >  
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" >  
                         
                      </div>  
                  </div>  
           </div>  
           <div class="col-sm-6">  
            <div class="form-group">  
                    <label class="control-label" for="fname">Last Name</label>  
                      <div >  
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required="">  
                         
                      </div>  
                  </div>  
           </div>  
          </div>
          <div class="form-group">  
                  <label class="control-label" for="pswd">Nama Lengkap</label>  
                    <div>  
                      <input type="nama_lengkap" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="isi nama lengkap" required="">  
                       
                    </div>  
                </div>    
          <div class="form-group">  
                  <label class="control-label" for="pswd">Username</label>  
                    <div>  
                      <input type="username" class="form-control" id="username" name="username" placeholder="username" required="">  
                       
                    </div>  
                </div>  
                <div class="form-group">  
                  <label class="control-label" for="pswd">Password</label> 
                    <div>  
                      <input type="password" class="form-control" id="pswd" name="password" placeholder="Password" required="">  
                       
                    </div>  
                </div>                  
                 
                 <div class="form-group">
                    <label for="inputPassword3" class="control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <label class="radio-inline">
                    <input type="radio" name="jk" id="jk" value="Laki-Laki" checked="checked"> Laki-laki
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="jk" id="inlineRadio2" value="Perempuan" checked="checked"> Perempuan
                    </label>
                    </div>
                  </div>
                </div>
                  <div class="form-group">   
                  
                    <div class="col-sm-offset-5 col-sm-3 btn-submit">  
                      <button type="submit" class="btn btn-success">Register</button>  
                    </div> 
                    <div class="row">   
                  </div>  
                     </form>  
        </div>    </div>   
       </div>  
      </div>  
     </div>  
    </div>  
   </div>  
   </div>     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
  </body>  
  </html>  