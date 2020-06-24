<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MUser extends CI_Model
{
	public function getAll()
	{
		return $this->db->select('admin.*, roles.role')
			->from('admin')
			->join('roles', 'roles.id = admin.role_id')
			->get()
			->result_object();
	}

	public function get($id)
	{
		return $this->db->get_where('admin', ['id' => $id])->row_object();
	}

	public function insert($data)
	{
		return $this->db->insert('admin', $data);
	}

	public function update($data, $id)
	{
		return $this->db->update('admin', $data, ['id' => $id]);
	}

	public function delete($id)
	{
		return $this->db->delete('admin', ['id' => $id]);
	}

	public function getRoles()
	{
		return $this->db->get('roles')->result_object();
	}

	public function getRole($user_id, $role_id)
	{
		return $this->db->select('admin.*, roles.role')
			->from('admin')
			->join('roles', 'admin.role_id = roles.id')
			->where('roles.id', $role_id)
			->where('admin.id', $user_id)
			->get()
			->row_object();
	}
}
