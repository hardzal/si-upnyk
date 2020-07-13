<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MGrafik extends CI_Model
{
	private $table = "grafik";
	private $table2 = "grafik_isi";

	public function getAllGrafik()
	{
		return $this->db->get($this->table)->result_object();
	}
	
	public function getAllIsiGrafik()
	{
		return $this->db->order_by('variable_name', 'ASC')->get($this->table2)->result_object();
	}
	
	public function getAllIsibyId($id_grafik)
	{
	    return $this->db->get_where($this->table2, ['id_grafik' => $id_grafik])->result_object();
	    
//     	return $this->db->select('grafik.title as title, grafik.type as type, grafik_isi.*')
// 		->from('grafik')
// 		->join('grafik_isi', 'grafik.id = grafik_isi.id_grafik', 'left')
// 		->where('grafik.id', $id_grafik)
// 		->get()
// 		->result_object();
	}
	
// 	public function getActive()
// 	{
// 		return $this->db->get_where($this->table, ['status' => 1])->result_object();
// 	}

	public function get($id)
	{
		return $this->db->get_where($this->table, ['id' => $id])->row_object();
	}

	public function insert($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function update($data, $id)
	{
		return $this->db->update($this->table, $data, ['id' => $id]);
	}

	public function delete($id)
	{
		return $this->db->delete($this->table, ['id' => $id]);
	}
	
	public function get_isi_id($id)
	{
		return $this->db->get_where($this->table2, ['id' => $id])->row_object();
	}

	public function insert_isi($data)
	{
		return $this->db->insert($this->table2, $data);
	}

	public function update_isi($data, $id)
	{
		return $this->db->update($this->table2, $data, ['id' => $id]);
	}

	public function delete_isi($id)
	{
		return $this->db->delete($this->table2, ['id' => $id]);
	}
}
