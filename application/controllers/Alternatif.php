<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Alternatif');
		// $this->load->model('M_Gap');
	}

	public function index()
	{
		$data['mahasiswa'] = $this->M_Alternatif->lihatdata();
		// $ranking = $this->M_Gap->hitung($data);
		$this->load->view('v_alternatif',$data);
	}

	public function insert()
	{
		echo "data masuk";
		//$this->load->view('v_alternatif');
	}

	
}
?>
