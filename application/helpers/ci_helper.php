<?php

function is_publish($status)
{
	if ($status) {
		return "<div class='btn btn-xs btn-success'>Publish</div>";
	}

	return "<div class='btn btn-xs btn-danger'>Unpublish</div>";
}

function show_role($role_id)
{
	$ci = &get_instance();

	return ucfirst($ci->db->select('role')
		->from('roles')
		->where('id', $role_id)
		->get()
		->row_object()
		->role);
}
