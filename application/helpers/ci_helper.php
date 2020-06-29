<?php

function is_publish($status, $name = "Publish")
{
	if ($status) {
		return "<div class='btn btn-xs btn-success'>{$name}</div>";
	}

	return "<div class='btn btn-xs btn-danger'>Un{$name}</div>";
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


function showMenu($submenu)
{
	$ci = &get_instance();
	$menu = $ci->db->get_where('menus', ['id' => $submenu->menu_id])->row_object();

	if (!$menu->has_submenu) {
		$second_submenu = $ci->db->get_where('submenus', ['id' => $submenu->menu_id])->row_object();

		return $second_submenu->submenu;
	}

	return $submenu->menu;
}


function checkRoleMenus($role_id)
{
	$ci = &get_instance();

	$menus = $ci->menu->getByRoleId($role_id);
	$current_uri = $ci->uri->segment(1) . "/" . $ci->uri->segment(2); // uri_string()
	$current_menu = $ci->menu->getByUri($current_uri);

	$menu_id = [];

	foreach ($menus as $menu) {
		$menu_id[] = $menu->menu_id;
	}

	if (in_array($current_menu->id, $menu_id)) {
		return false;
	}

	return true;
}
