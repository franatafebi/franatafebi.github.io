<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cpi extends CI_Controller{



	public function __construct(){
		parent::__construct();
		$this->load->model('Model_cpi');
      
        $this->load->helper('url');

	}
	public function index(){
		$isi['content']		= 'admin/cpi/view_cpi';
		$isi['judul']		= 'Perhitungan dengan metode CPI';
		$isi['sub_judul']	= '';
		$isi['febi'] 		= $this->Model_cpi->metode_cpi();
		$isi['dat'] 		= $this->Model_cpi->metode_cpi();
		$isi['report'] = $this->Model_cpi->report();
		$this->db->select_min("saldo");
		$this->db->from("tbl_user");
		$this->db->where("saldo >", 25000);
		$isi['data'] 		= $this->db->get();
		$this->db->select_min("keaktifan");
		$this->db->from("tbl_user");
		$this->db->where("saldo >", 25000);
		$isi['data1'] 		= $this->db->get();
		$this->load->view('admin/index',$isi);

		
        

	}

	public function cetak3()
	{
		$isi['content']		= 'admin/cpi/cetak3';
		$isi['judul']		= 'Laporan';
		$isi['sub_judul']	= 'Cetak Laporan';
		$isi['febi'] 		= $this->Model_cpi->metode_cpi();
		$isi['dat'] 		= $this->Model_cpi->metode_cpi();
		$this->db->select_min("saldo");
		$this->db->from("tbl_user");
		$this->db->where("saldo >", 25000);
		$isi['data'] 		= $this->db->get();
		$this->db->select_min("keaktifan");
		$this->db->from("tbl_user");
		$this->db->where("saldo >", 25000);
		$isi['data1'] 		= $this->db->get();
		ob_start();
		$this->load->view('admin/cpi/cetak3', $isi);
		$html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en');
		
		
		$pdf->WriteHTML($html);
		$pdf->Output('Data Transaksi.pdf', 'D');
		
		


	}

}