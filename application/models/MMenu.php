<?php

class MMenu extends CI_Model
{
	public function getAll()
	{
		return $this->db->get('menus')->result_object();
	}

	public function get($id)
	{
		return $this->db->get_where('menus', ['id' => $id])->row_object();
	}

	public function insert($data)
	{
		return $this->db->insert('menus', $data);
	}

	public function update($data, $id)
	{
		return $this->db->update('menus', $data, ['id' => $id]);
	}

	public function delete($id)
	{
		return $this->db->delete('menus', ['id' => $id]);
	}

	public function getList($id)
	{
		return $this->db->select('role_menus.*, menus.menu, menus.icon, menus.url, menus.is_active, menus.id as menu_id')
			->from('role_menus')
			->join('menus', 'menus.id = role_menus.menu_id', 'left')
			->where('role_menus.role_id', $id)
			->where('menus.is_active', 1)
			->get()
			->result_object();
	}

	public function check($id)
	{
		return $this->db->select('menus.has_submenu')
			->from('menus')
			->where('menus.id', $id)
			->get()
			->row_object();
	}
}
