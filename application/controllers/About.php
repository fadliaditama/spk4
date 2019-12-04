<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->load->view('v_about.php');
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */