<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mlogin extends CI_Model
{
    function ceklogin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));

        return $this->db->get('admin');
    }
}
