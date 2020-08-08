<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lprpenarikan extends CI_Controller{



	public function __construct(){
		parent::__construct();
		$this->load->model('Model_lprpenarikan');
      
        $this->load->helper('url');

	}
	public function index(){
		$isi['content']		= 'admin/lprpenarikan/lprpenarikan';
		$isi['judul']		= 'Laporan';
		$isi['sub_judul']	= 'Laporan Penarikan'; 

			if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
		            $filter = $_GET['filter']; // Ambil data filder yang dipilih user
		            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
		                $tanggal = $_GET['tanggal'];
		                
		                $ket = 'Data Transaksi Tanggal '.date('d-m-y', strtotime($tanggal));
		                $url_cetak = 'transaksi/cetak?filter=1&tahun='.$tanggal;
		                $transaksi = $this->Model_lprpenarikan->view_by_date($tanggal); // Panggil fungsi view_by_date yang ada di Model_lprpenarikan
		            }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
		                $bulan = $_GET['bulan'];
		                $tahun = $_GET['tahun'];
		                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		                
		                $ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;
		                $url_cetak = 'transaksi/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
		                $transaksi = $this->Model_lprpenarikan->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di Model_lprpenarikan
		            }else{ // Jika filter nya 3 (per tahun)
		                $tahun = $_GET['tahun'];
		                
		                $ket = 'Data Transaksi Tahun '.$tahun;
		                $url_cetak = 'transaksi/cetak?filter=3&tahun='.$tahun;
		                $transaksi = $this->Model_lprpenarikan->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di Model_lprpenarikan
		            }
		        }else{ // Jika user tidak mengklik tombol tampilkan
		            $ket = 'Semua Data Transaksi';
		            $url_cetak = 'transaksi/cetak';
		            $transaksi = $this->Model_lprpenarikan->view_all(); // Panggil fungsi view_all yang ada di Model_lprpenarikan
		        }
		        
		    $isi['ket'] = $ket;
		    $isi['url_cetak'] = base_url('Admin/Lprpenarikan/cetak/'.$url_cetak);
		    $isi['transaksi'] = $transaksi;
		    $isi['option_tahun'] = $this->Model_lprpenarikan->option_tahun();
		    $this->load->view('admin/index',$isi);
		  }
  
  public function cetak(){
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $tgl = $_GET['tanggal'];

                $ket = 'Data Transaksi Tanggal '.date('d-m-y', strtotime($tgl));
                $transaksi = $this->Model_lprpenarikan->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di Model_lprpenarikan
            }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

                $ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $transaksi = $this->Model_lprpenarikan->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di Model_lprpenarikan
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];

                $ket = 'Data Transaksi Tahun '.$tahun;
                $transaksi = $this->Model_lprpenarikan->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di Model_lprpenarikan
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Transaksi';
            $transaksi = $this->Model_lprpenarikan->view_all(); // Panggil fungsi view_all yang ada di Model_lprpenarikan
        }

        $isi['ket'] = $ket;
        $isi['transaksi'] = $transaksi;

		ob_start();
		$this->load->view('Admin/Lprpenarikan/cetak', $isi);
		$html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en');
		
		
		$pdf->WriteHTML($html);
		$pdf->Output('Data Transaksi.pdf', 'D');
	}
}