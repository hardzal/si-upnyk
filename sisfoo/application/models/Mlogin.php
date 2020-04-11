<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlogin extends CI_Model {

	public function Mlogin() {
        parent::__construct();
        $this->load->database();
    }

    function ceklogin($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));

        return $this->db->get('admin');
    }

}