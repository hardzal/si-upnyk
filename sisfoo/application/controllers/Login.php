<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{



	public function __construct(){
	
	parent::__construct();
	
		 $this->load->helper(array('form', 'url', 'text_helper', 'date', 'file'));
		 $this->load->model('Mlogin', 'mod');
		 $this->load->library('form_validation');
		 $this->load->library('session');
		
	}
	public function index(){
		
		$this->load->view('login');
		
	}
	
	public function proseslogin(){
			
			$username= $this->input->post('username');
			$password= $this->input->post('password');
				
			// $json = array();
			// $json['title']      = 'Berhasil';
			// $json['mesg']       = '<strong>Sukses</strong>';

			$cek = $this->mod->ceklogin($username, $password);	
			
			if ($cek->num_rows() == 1) {
			
				 foreach ($cek->result() as $data) {
					$sess_data['username'] = $data->username;
					$a=$this->session->set_userdata($sess_data);
					
					redirect('admin/home');
				} 
				
			} else {
				$this->session->set_flashdata('notif', 'Maaf, Kombinasi Username dan Password salah.');
				redirect('login');
			}	

		}
		
		public function logout() {
			$a=$this->session->sess_destroy();
			//var_dump($a);
			redirect('login');
		}
}