<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mlogin extends CI_Model
{
	function ceklogin($username, $password)
	{
		$this->db->where('username', $username);
		$user = $this->db->get('admin')->row_object();
		if ($user) {
			if (password_verify($password, $user->password)) {
				return $user;
			}
			return false;
		}

		return false;
	}
}
