<?php

class MSubMenu extends CI_Model
{
	public function getAll()
	{
		return $this->db->select('submenus.*, menus.menu, menus.has_submenu as menu_submenu')
			->from('submenus')
			->join('menus', 'menus.id = submenus.menu_id', 'left')
			->order_by('menus.menu', 'ASC')
			->get()
			->result_object();
	}

	public function getAllMenu($id_menu = null)
	{
		$query = 'SELECT menus.id, menus.menu FROM menus UNION SELECT  submenus.id, submenus.submenu FROM submenus';

		if ($id_menu != null) {
			$query .= ' WHERE submenus.id <> ' . $id_menu;
		}

		return $this->db
			->query($query)
			->result_object();
	}

	public function get($id)
	{
		return $this->db->get_where('submenus', ['id' => $id])->row_object();
	}

	public function insert($data)
	{
		return $this->db->insert('submenus', $data);
	}

	public function update($data, $id)
	{
		return $this->db->update('submenus', $data, ['id' => $id]);
	}

	public function delete($id)
	{
		return $this->db->delete('submenus', ['id' => $id]);
	}

	public function listSubMenu($menu_id)
	{
		return $this->db->select('submenus.*')
			->from('submenus')
			->join('menus', 'submenus.menu_id = menus.id')
			->where('submenus.menu_id', $menu_id)
			->where('submenus.is_active', 1)
			->where('menus.has_submenu', 1)
			->get()
			->result_object();
	}

	public function listThirdMenu($submenu_id)
	{
		return $this->db->select('submenus.*')
			->from('submenus')
			->where('submenus.menu_id', $submenu_id)
			->where('submenus.is_active', 1)
			->get()
			->result_object();
	}

	public function check($submenu_id)
	{
		return $this->db->select('submenus.has_submenu')
			->from('submenus')
			->where('submenus.id', $submenu_id)
			->get()
			->row_object();
	}
}
