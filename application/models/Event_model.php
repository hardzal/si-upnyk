<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event_model extends CI_Model
{
	public function getAll()
	{
		return $this->db->select('events.*, roles.role, admin.username, admin.role_id')
			->from('events')
			->join('admin', 'admin.id=events.user_id')
			->join('roles', 'admin.role_id=roles.id')
			->get()
			->result_object();
	}

	public function get($id)
	{
		return $this->db->get_where('events', ['id' => $id])->row_object();
	}

	public function insert($data)
	{
		return $this->db->insert('events', $data);
	}

	public function update($data, $id)
	{
		return $this->db->update('events', $data, ['id' => $id]);
	}

	public function delete($id)
	{
		return $this->db->delete('events', ['id' => $id]);
	}
}
