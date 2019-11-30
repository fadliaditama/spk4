<?php 
class M_Alternatif extends CI_Model
{
	function lihatdata()
	{
		return $this->db->get('mahasiswa')->result();
	}

	function insert($table,$data)
	{
		$this->db->insert($table,$data);
	}

	function hapus($id,$table)
	{
		$this->db->where($id);
		$this->db->delete($table);
	}
}

 ?>