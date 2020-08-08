<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lprtransaksi extends CI_Controller{



	public function __construct(){
		parent::__construct();
		$this->load->model('Model_lprtransaksi');
      
        $this->load->helper('url');

	}
	public function index(){
		$isi['content']		= 'admin/lprtransaksi/lprtransaksi';
		$isi['judul']		= 'Laporan';
		$isi['sub_judul']	= 'Laporan Transaksi'; 

			if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
		            $filter = $_GET['filter']; // Ambil data filder yang dipilih user
		            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
		                $tgl = $_GET['tanggal'];
		                
		                $ket = 'Data Transaksi Tanggal '.date('d-m-y', strtotime($tgl));
		                 $url_cetak = 'transaksi/cetak?filter=1&tanggal='.$tgl;
		                $transaksiadmin = $this->Model_lprtransaksi->view_by_date($tgl);
		                $this->db->Where('nama_lengkap', $this->session->userdata('nama_lengkap'));
		                $transaksi = $this->Model_lprtransaksi->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di Model_lprtransaksi
		            }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
		                $bulan = $_GET['bulan'];
		                $tahun = $_GET['tahun'];
		                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		                
		                $ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;
		                $url_cetak = 'transaksi/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
		                $transaksiadmin = $this->Model_lprtransaksi->view_by_month($bulan, $tahun);
		                $this->db->Where('nama_lengkap', $this->session->userdata('nama_lengkap'));
		                $transaksi = $this->Model_lprtransaksi->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di Model_lprtransaksi
		            }else{ // Jika filter nya 3 (per tahun)
		                $tahun = $_GET['tahun'];
		                
		                $ket = 'Data Transaksi Tahun '.$tahun;
		                $url_cetak = 'transaksi/cetak?filter=3&tahun='.$tahun;
		                $transaksiadmin = $this->Model_lprtransaksi->view_by_year($tahun);
		                $this->db->Where('nama_lengkap', $this->session->userdata('nama_lengkap'));
		                $transaksi = $this->Model_lprtransaksi->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di Model_lprtransaksi
		            }
		        }else{ // Jika user tidak mengklik tombol tampilkan
		            $ket = 'Semua Data Transaksi';
		            $url_cetak = 'transaksi/cetak';
		            $transaksiadmin = $this->Model_lprtransaksi->view_all();
		            $this->db->Where('nama_lengkap', $this->session->userdata('nama_lengkap'));
		            $transaksi = $this->Model_lprtransaksi->view_all(); // Panggil fungsi view_all yang ada di Model_lprtransaksi
		        }
		        
		    $isi['ket'] = $ket;
		    $isi['url_cetak'] = base_url('Admin/Lprtransaksi/cetak/'.$url_cetak);
		    $isi['transaksiadmin'] = $transaksiadmin;
		    $isi['option_tahun1'] = $this->Model_lprtransaksi->option_tahun();
		    $this->db->Where('nama_lengkap', $this->session->userdata('nama_lengkap'));
		    $isi['url_cetak'] = base_url('Admin/Lprtransaksi/cetak/'.$url_cetak);
		    $isi['transaksi'] = $transaksi;
		    $isi['option_tahun'] = $this->Model_lprtransaksi->option_tahun();
		    $this->load->view('admin/index',$isi);
		  }
  
  public function cetak(){
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $tgl = $_GET['tanggal'];
                $ket = 'Data Transaksi Tanggal'.date('d-m-y', strtotime($tgl));
                $transaksiadmin = $this->Model_lprtransaksi->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di Model_lprtransaksi
                $this->db->Where('nama_lengkap', $this->session->userdata('nama_lengkap'));
		        $transaksi = $this->Model_lprtransaksi->view_by_date($tgl);
            }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

                $ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $transaksiadmin = $this->Model_lprtransaksi->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di Model_lprtransaksi
                $this->db->Where('nama_lengkap', $this->session->userdata('nama_lengkap'));
                $transaksi = $this->Model_lprtransaksi->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di Model_lprtransaksi
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];

                $ket = 'Data Transaksi Tahun '.$tahun;
                $transaksiadmin = $this->Model_lprtransaksi->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di Model_lprtransaksi
                $this->db->Where('nama_lengkap', $this->session->userdata('nama_lengkap'));
                $transaksi = $this->Model_lprtransaksi->view_by_year($tahun);
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Transaksi';
            $transaksiadmin = $this->Model_lprtransaksi->view_all(); // Panggil fungsi view_all yang ada di Model_lprtransaksi
            $this->db->Where('nama_lengkap', $this->session->userdata('nama_lengkap'));
            $transaksi = $this->Model_lprtransaksi->view_all();
        }

        $isi['ket'] = $ket;
        $isi['transaksiadmin'] = $transaksiadmin;
        $this->db->Where('nama_lengkap', $this->session->userdata('nama_lengkap'));
        $isi['transaksi'] = $transaksi;

		ob_start();
		$this->load->view('Admin/Lprtransaksi/cetak', $isi);
		$html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en');
		
		
		$pdf->WriteHTML($html);
		$pdf->Output('Data Transaksi.pdf', 'D');
	}
}