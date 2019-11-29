<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Gap extends CI_Model {

	public function hitung($data)
	{
		$users =  $data;
		
		$raw_asam = [];
		$raw_non_asam = [];
		foreach ($users as $key => $user) {
			$data = array($user->fixed_acid, $user->volatile_acid, $user->citric_acid, $user->ph);
	  		array_push($raw_asam, $data);

			$data = array($user->residual_sugar, $user->chlorides, $user->free_sulfur_dioxide, $user->sulphates, $user->alcohol);
			array_push($raw_non_asam, $data);
		}
		$hasil = $this->gap($raw_asam,$raw_non_asam);
		return $hasil;
	}

	function gap($arr_asam, $arr_non_asam)
	{
		$asam = (Object)[
			'bobot' => 0.6,
			'cf' => 0.6,
			'sf' => 0.4,
			'sub_kriteria' => 
			[
				'Fixed acidity',
				'Volatile acidity',
				'Citric acidity',
				'Ph'
			]
		];
		$asam_nilai = [3,3,3,3];
		$asam_tipe = [
			'core',
			'second',
			'second',
			'core'
		];

		$non_asam = (Object)[
			'bobot' => 0.4,
			'cf' => 0.55,
			'sf' => 0.45,
			'sub_kriteria' => 
			[
				'Residual sugar',
				'Chlorides',
				'Free sulfur dioxide',
				'Sulphates',
				'Alcohol'
			]
		];
		$non_asam_nilai = [3,3,3,3,3];
		$non_asam_tipe = [
			'second',
			'core',
			'core',
			'core',
			'second'
		];

		$raw_asam = $arr_asam;
		$raw_non_asam = $arr_non_asam;

		foreach ($raw_asam as $key => $value) {
			foreach ($value as $key2 => $value2) {
				if($key2 == 0)
				{
					if(13 <= $value2 && $value2 <= 16)
						$alt_asam[$key][$key2] = 1;
					else if(9 <= $value2 && $value2 <= 13)
						$alt_asam[$key][$key2] = 2;
					else if(5 <= $value2 && $value2 <= 9)
						$alt_asam[$key][$key2] = 3;
					else if(0 <= $value2 && $value2 <= 5)
						$alt_asam[$key][$key2] = 4;
				}
				else if($key2 == 1)
				{
					if(1.6 <= $value2 && $value2 <= 2)
						$alt_asam[$key][$key2] = 1;
					else if(1.1 <= $value2 && $value2 <= 1.6)
						$alt_asam[$key][$key2] = 2;
					else if(0.5 <= $value2 && $value2 <= 1.1)
						$alt_asam[$key][$key2] = 3;
					else if(0 <= $value2 && $value2 <= 0.5)
						$alt_asam[$key][$key2] = 4;
				}
				else if($key2 == 2)
				{
					if(0.76 <= $value2 && $value2 <= 1)
						$alt_asam[$key][$key2] = 1;
					else if(0.51 <= $value2 && $value2 <= 0.76)
						$alt_asam[$key][$key2] = 2;
					else if(0.26 <= $value2 && $value2 <= 0.51)
						$alt_asam[$key][$key2] = 3;
					else if(0 <= $value2 && $value2 <= 0.26)
						$alt_asam[$key][$key2] = 4;
				}
				else if($key2 == 3)
				{
					if(0 <= $value2 && $value2 <= 1)
						$alt_asam[$key][$key2] = 1;
					else if(1 <= $value2 && $value2 <= 6)
						$alt_asam[$key][$key2] = 2;
					else if(6 <= $value2 && $value2 <= 7)
						$alt_asam[$key][$key2] = 3;
					else if(7 <= $value2 && $value2 <= 14)
						$alt_asam[$key][$key2] = 4;
				}
			}
		}

		foreach ($raw_non_asam as $key => $value) {
			foreach ($value as $key2 => $value2) {
				if($key2 == 0)
				{
					if(13 <= $value2 && $value2 <= 16)
						$alt_non_asam[$key][$key2] = 1;
					else if(9 <= $value2 && $value2 <= 13)
						$alt_non_asam[$key][$key2] = 2;
					else if(5 <= $value2 && $value2 <= 9)
						$alt_non_asam[$key][$key2] = 3;
					else if(0 <= $value2 && $value2 <= 5)
						$alt_non_asam[$key][$key2] = 4;
				}
				// Chlorides
				else if($key2 == 1)
				{
					if(0 <= $value2 && $value2 <= 0.01)
						$alt_non_asam[$key][$key2] = 1;
					else if(0.01 <= $value2 && $value2 <= 0.1)
						$alt_non_asam[$key][$key2] = 2;
					else if(0.1 <= $value2 && $value2 <= 0.4)
						$alt_non_asam[$key][$key2] = 3;
					else if(0.4 <= $value2 && $value2 <= 1)
						$alt_non_asam[$key][$key2] = 4;
				}
				else if($key2 == 2)
				{
					if(1 <= $value2 && $value2 <= 25)
						$alt_non_asam[$key][$key2] = 1;
					else if(25 <= $value2 && $value2 <= 50)
						$alt_non_asam[$key][$key2] = 2;
					else if(50 <= $value2 && $value2 <= 75)
						$alt_non_asam[$key][$key2] = 3;
					else if(75 <= $value2 && $value2 <= 100)
						$alt_non_asam[$key][$key2] = 4;
				}
				else if($key2 == 3)
				{
					if(1.6 <= $value2 && $value2 <= 2)
						$alt_non_asam[$key][$key2] = 1;
					else if(1.1 <= $value2 && $value2 <= 1.6)
						$alt_non_asam[$key][$key2] = 2;
					else if(0.6 <= $value2 && $value2 <= 1.1)
						$alt_non_asam[$key][$key2] = 3;
					else if(0 <= $value2 && $value2 <= 0.6)
						$alt_non_asam[$key][$key2] = 4;
				}
				else if($key2 == 4)
				{
					if(12 <= $value2 && $value2 <= 16)
						$alt_non_asam[$key][$key2] = 1;
					else if(9 <= $value2 && $value2 <= 12)
						$alt_non_asam[$key][$key2] = 2;
					else if(5 <= $value2 && $value2 <= 9)
						$alt_non_asam[$key][$key2] = 3;
					else if(0 <= $value2 && $value2 <= 5)
						$alt_non_asam[$key][$key2] = 4;
				}
			}
		}
		function hitung_bobot($val)
		{
			$selisih = [0,1,-1,2,-2,3,-3,4,-4];
			$bobot_nilai = [5,4.5,4,3.5,3,2.5,2,1.5,1];
			foreach ($selisih as $key => $value) {
				if($val == $value)
					return $bobot_nilai[$key];
			}
		}

		$gap_asam = [];
		$gap_non_asam = [];
		
		$bobot_asam = [];
		$bobot_non_asam = [];
		
		$cf_asam = [];
		$cf_non_asam = [];
		
		$sf_asam = [];
		$sf_non_asam = [];

		foreach ($alt_asam as $key => $value) {
			$cf_asam[$key] = [];
			$sf_asam[$key] = [];
			foreach ($value as $key2 => $value2) {
				$gap_asam[$key][$key2] = $alt_asam[$key][$key2] - $asam_nilai[$key2];
				$bobot_asam[$key][$key2] = hitung_bobot($gap_asam[$key][$key2]);
				
				if($asam_tipe[$key2] == 'core')
					array_push($cf_asam[$key], $bobot_asam[$key][$key2]);
				else
					array_push($sf_asam[$key], $bobot_asam[$key][$key2]);
				
			}
		}
		foreach ($alt_non_asam as $key => $value) {
			$cf_non_asam[$key] = [];
			$sf_non_asam[$key] = [];
			foreach ($value as $key2 => $value2) {
				$gap_non_asam[$key][$key2] = $alt_non_asam[$key][$key2] - $non_asam_nilai[$key2];
				$bobot_non_asam[$key][$key2] = hitung_bobot($gap_non_asam[$key][$key2]);

				if($non_asam_tipe[$key2] == 'core')
					array_push($cf_non_asam[$key], $bobot_non_asam[$key][$key2]);
				else
					array_push($sf_non_asam[$key], $bobot_non_asam[$key][$key2]);
			}
		}
		
		
		foreach ($alt_asam as $key => $value) {
			$ncf_asam[$key] = array_sum($cf_asam[$key]) / count($cf_asam[$key]);
			$nsf_asam[$key] = array_sum($sf_asam[$key]) / count($sf_asam[$key]);
			$total_asam[$key] = $asam->cf * $ncf_asam[$key] + $asam->sf * $nsf_asam[$key];
		}
		foreach ($alt_non_asam as $key => $value) {
			$ncf_non_asam[$key] = array_sum($cf_non_asam[$key]) / count($cf_non_asam[$key]);
			$nsf_non_asam[$key] = array_sum($sf_non_asam[$key]) / count($sf_non_asam[$key]);
			$total_non_asam[$key] = $non_asam->cf * $ncf_non_asam[$key] + $non_asam->sf * $nsf_non_asam[$key];
		}
		
		foreach ($alt_asam as $key => $value) {
			$rank[$key] = $asam->bobot * $total_asam[$key] + $non_asam->bobot * $total_non_asam[$key];
		}
		
		$hasil = (Object)[
			'gap_asam' 			=> $gap_asam,
			'gap_non_asam' 		=> $gap_non_asam,
			'bobot_asam' 		=> $bobot_asam,
			'bobot_non_asam' 	=> $bobot_non_asam,
			'ncf_asam' 			=> $ncf_asam,
			'ncf_non_asam' 		=> $ncf_non_asam,
			'nsf_asam' 			=> $nsf_asam,
			'nsf_non_asam' 		=> $nsf_non_asam,
			'total_asam' 		=> $total_asam,
			'total_non_asam' 	=> $total_non_asam,
			'rank' 				=> $rank
		];
		return $hasil;
	}
}

/* End of file M_Gap.php */
/* Location: ./application/models/M_Gap.php */