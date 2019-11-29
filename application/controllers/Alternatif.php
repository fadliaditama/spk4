<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Alternatif');
		$this->load->model('M_Gap');
	}

	public function index()
	{
		$data['mahasiswa'] = $this->M_Alternatif->lihatdata();
		// $ranking = $this->M_Gap->hitung($data['mahasiswa']);
		$this->load->view('v_alternatif',$data);
	}

	public function insert()
	{
		$nama = $this->input->post('nama');
		$fixed_acid = $this->input->post('fixed_acid');
		$volatile_acid = $this->input->post('volatile_acid');
		$citric_acid = $this->input->post('citric_acid');
		$ph = $this->input->post('ph');
		$residual_sugar = $this->input->post('residual_sugar');
		$chlorides = $this->input->post('chlorides');
		$free_sulfur_dioxide = $this->input->post('free_sulfur_dioxide');
		$sulphates = $this->input->post('sulphates');
		$alcohol = $this->input->post('alcohol');

		$data = array(
		'nama' => $nama,
		'fixed_acid' => $fixed_acid,
		'volatile_acid' => $volatile_acid,
		'citric_acid'=> $citric_acid,
		'ph' => $ph,
		'residual_sugar' => $residual_sugar,
		'chlorides' => $chlorides,
		'free_sulfur_dioxide' => $free_sulfur_dioxide,
		'sulphates' => $sulphates,
		'alcohol' => $alcohol
		);

		$this->M_Alternatif->insert($data,['mahasiswa']);
		redirect('alternatif/index');
		//echo "data masuk";
		//$this->load->view('v_alternatif');
	}

	public function hapus()
	{
		$where = array('id' => $id);
		$this->M_Alternatif->hapus($where,['mahasiswa']);
		redirect('alternatif/index','refresh');
	}
	
}
?>
