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
		
		$data = array(
		'nama' 					=> $this->input->post('nama'),
		'fixed_acid' 			=> $this->input->post('fixed_acid'),
		'volatile_acid' 		=> $this->input->post('volatile_acid'),
		'citric_acid'			=> $this->input->post('citric_acid'),
		'ph' 					=> $this->input->post('ph'),
		'residual_sugar'		=> $this->input->post('residual_sugar'),
		'chlorides' 			=> $this->input->post('chlorides'),
		'free_sulfur_dioxide' 	=> $this->input->post('free_sulfur_dioxide'),
		'sulphates' 			=> $this->input->post('sulphates'),
		'alcohol' 				=> $this->input->post('alcohol')
		);
		$table = 'mahasiswa';

		$this->M_Alternatif->insert($table, $data);
		redirect('alternatif','refresh');
	}

	public function hapus($id)
	{
		$id = array('id' => $id);
		$table = 'mahasiswa';

		$this->M_Alternatif->hapus($id,$table);
		redirect('alternatif','refresh');
	}
	
	public function edit($id)
	{
		$id = array('id' => $id);
		$data['mahasiswa'] = $this->M_Alternatif->edit($id,'mahasiswa')->result();
		$this->load->view('v_edit',$data);
	}

	public function update($id)
	{
		$data = array(
		'nama' 					=> $this->input->post('nama'),
		'fixed_acid' 			=> $this->input->post('fixed_acid'),
		'volatile_acid' 		=> $this->input->post('volatile_acid'),
		'citric_acid'			=> $this->input->post('citric_acid'),
		'ph' 					=> $this->input->post('ph'),
		'residual_sugar'		=> $this->input->post('residual_sugar'),
		'chlorides' 			=> $this->input->post('chlorides'),
		'free_sulfur_dioxide' 	=> $this->input->post('free_sulfur_dioxide'),
		'sulphates' 			=> $this->input->post('sulphates'),
		'alcohol' 				=> $this->input->post('alcohol')
		);
		$tabel = 'mahasiswa';

		$this->db->where('id', $id);
		$this->db->update($tabel, $data);
		redirect('alternatif','refresh');
	}
}
?>
