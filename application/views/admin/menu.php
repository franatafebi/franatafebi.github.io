<?php if($this->session->userdata('akses')=='1'):?>
      <li class="header">MAIN NAVIGATION</li> 
        <li class="active treeview"> 
          <a href="Admin"> 
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
            <span class="pull-right-container"> 
              <i class="fa fa-angle-left pull-right"></i> 
            </span> 
          </a> 
        </li>
         <li class="treeview">  
            <a href="<?php echo base_url()?>Admin/Nasabah"><i class="glyphicon glyphicon-user"></i><span>Profil</span></a> 
            <span class="pull-right-container"> 
              <i class="fa fa-angle-left pull-right"></i> 
            </span> 
          </a> 
        </li>
         <li class="treeview">  
            <a href="<?php echo base_url()?>Admin/Sampah"><i class="fa fa-files-o"></i> <span>Data Sampah</span></a> 
            <span class="pull-right-container"> 
              <i class="fa fa-angle-left pull-right"></i> 
            </span> 
          </a> 
        </li>
         <li class="treeview">  
            <a href="<?php echo base_url()?>Admin/Tabungan"><i class="fa fa-files-o"></i><span>Data Tabungan</span></a>
            <span class="pull-right-container"> 
              <i class="fa fa-angle-left pull-right"></i> 
            </span> 
          </a> 
        </li>
         <li class="treeview">  
            <a href="<?php echo base_url()?>Admin/Lprtransaksi"><i class="fa fa-files-o"></i><span>Laporan Transaksi</span></a>
            <span class="pull-right-container"> 
              <i class="fa fa-angle-left pull-right"></i> 
            </span> 
          </a> 
        </li>
<?php else:?>
                <li class="header">MAIN NAVIGATION</li> 
        <li class="active treeview"> 
          <a href="Admin"> 
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
            <span class="pull-right-container"> 
              <i class="fa fa-angle-left pull-right"></i> 
            </span> 
          </a> 
        </li> 
        <li class="treeview"> 
          <a href="#"> 
            <i class="fa fa-files-o"></i>
            <span>Data Master</span> 
            <span class="pull-right-container"> 
              <i class="fa fa-angle-left pull-right"></i> 
            </span> 
          </a> 
          <ul class="treeview-menu"> 
            <li><a href="<?php echo base_url()?>Admin/Nasabah"><i class="fa fa-circle-o"></i> Data Nasabah</a></li> 
            <li><a href="<?php echo base_url()?>Admin/Sampah"><i class="fa fa-circle-o"></i> Data Sampah</a></li> 
            <li><a href="<?php echo base_url()?>Admin/Tabungan"><i class="fa fa-circle-o"></i> Data Tabungan Nasabah</a></li> 
            <li><a href="<?php echo base_url()?>Admin/Pegawai"><i class="fa fa-circle-o"></i> Data Pegawai</a></li> 
          </ul> 
        </li> 
        
        <li class="treeview"> 
          <a href="#"> 
            <i class="fa fa-pie-chart"></i> 
            <span>Transaksi</span> 
            <span class="pull-right-container"> 
              <i class="fa fa-angle-left pull-right"></i> 
            </span> 
          </a> 
          <ul class="treeview-menu"> 
            <li><a href="<?php echo base_url()?>Admin/Setoran"><i class="fa fa-circle-o"></i> Setoran</a></li> 
            <li><a href="<?php echo base_url()?>Admin/Penarikan"><i class="fa fa-circle-o"></i> Penarikan</a></li> 
          </ul> 
        </li> 
         
        <li class="treeview"> 
          <a href="#"> 
            <i class="fa fa-desktop"></i> 
            <span>Laporan</span> 
            <span class="pull-right-container"> 
              <i class="fa fa-angle-left pull-right"></i>             
            </span> 
          </a> 
          <ul class="treeview-menu"> 
            <li><a href="<?php echo base_url()?>Admin/Lprtransaksi"><i class="fa fa-circle-o"></i> Laporan Transaksi</a></li> 
            <li><a href="<?php echo base_url()?>Admin/Cpi"><i class="fa fa-circle-o"></i> Laporan Member Terbaik</a></li> 
          </ul> 
        </li> 

        <?php endif;?>

