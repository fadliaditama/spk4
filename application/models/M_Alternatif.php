<?php 
class M_Alternatif extends CI_Model
{
	function lihatdata()
	{
		return $this->db->get('mahasiswa')->result();
	}

	function insert($data,$table)
	{
		$this->db->insert($table,$data);
	}

	function hapus($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}

 ?>