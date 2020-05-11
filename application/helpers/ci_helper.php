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

function uploadFile($config, $key)
{
	$ci = &get_instance();

	$ci->load->library('upload', $config);
	$ci->upload->initialize($config);

	return $ci->upload->do_upload($key, $config);
}

function changeFileName($file)
{
	$file_name = explode('.', $file['name']);
	$image_name = strtolower($file_name[0] . "-" . time() . "." . $file_name[1]);

	return $image_name;
}

function deleteFile($file)
{
	if (file_exists(FCPATH . $file)) {
		if (!unlink($file)) {
			return false;
		}
	}

	return true;
}
