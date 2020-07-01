<?php

class MRoleAccess extends CI_Model
{

	public function getAll()
	{
		return $this->db->get('roles')->result_object();
	}

	public function get($id)
	{
		return $this->db->get_where('roles', ['id' => $id])->row_object();
	}

	public function insert($data)
	{
		return $this->db->insert('roles', $data);
	}

	public function update($data, $id)
	{
		return $this->db->update('roles', $data, ['id' => $id]);
	}

	public function delete($table, $where)
	{
		return $this->db->delete($table, $where);
	}

	public function getAccess($role_id)
	{
		return $this->db->get_where('role_menus', ['role_id' => $role_id])->result_object();
	}

	public function insertAccess($data)
	{
		return $this->db->insert('role_menus', $data);
	}

	public function getMenu($id)
	{
		return $this->db->get_where('role_menus', ['menu_id' => $id])->result_object();
	}
}
