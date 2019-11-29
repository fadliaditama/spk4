<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Alternatif');
		$this->load->model('M_Gap');
	}

	public function index()
	{
		$data['mahasiswa'] = $this->M_Alternatif->lihatdata();
		$data['pm'] = $this->M_Gap->hitung($data['mahasiswa']);
		$this->load->view('v_perhitungan',$data);
	}

}

/* End of file Perhitungan.php */
/* Location: ./application/controllers/Perhitungan.php */