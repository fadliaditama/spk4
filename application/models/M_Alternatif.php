<?php 
class M_Alternatif extends CI_Model
{
	function lihatdata()
	{
		return $this->db->get('mahasiswa')->result();
	}
}

 ?>