<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Pegawai_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function insertPegawai()
	{
		$object = array
		(
			'nama' =>$this->input->post('nama'),
			'nip' =>$this->input->post('nip'),
			'tanggal' =>$this->input->post('tanggal'),
			'alamat' =>$this->input->post('alamat'),
			'foto' =>$this->upload->data('file_name'),
		);
		$this->db->insert('pegawai',$object);
	}

	public function getDataPegawai()
	{
		$query = $this->db->query("SELECT id, nama ,nip , DAY(Tanggal) as tanggal, 
			MONTH(Tanggal) as bulan, YEAR(Tanggal) as tahun, alamat, foto from pegawai");
		return $query->result();
	}

	public function getPegawai($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('pegawai',1);
		return $query->result();
	}

	public function UpdateById($id)
	{
		$data = array
		(
			'nama' => $this->input->post('nama'),
			'nip' =>$this->input->post('nip'),
			'tanggal' =>$this->input->post('tanggal'),
			'alamat' =>$this->input->post('alamat'),
			'foto' =>$this->upload->data('file_name')
		);
		$this->db->where('id', $id);
		$this->db->update('pegawai', $data);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pegawai');
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>
