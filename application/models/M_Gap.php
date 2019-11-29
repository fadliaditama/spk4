<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Gap extends CI_Model {

	public function hitung()
	{
		$users =  $data; 
		$raw_asam = [];
		$raw_non_asam = [];
		foreach ($users as $key => $user) {
		$nama_user[$key] = $user->nama;
		$data = array($user->Fixed, $user->asam2, $user->asam3, $user->asam4);
  		array_push($raw_asam, $data);

		$data = array($user->non_asam1, $user->non_asam2, $user->non_asam3, $user->non_asam4, $user->non_asam5);
		array_push($raw_non_asam, $data_user);
	}

}

/* End of file M_Gap.php */
/* Location: ./application/models/M_Gap.php */