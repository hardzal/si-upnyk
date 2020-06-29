<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('username') == NULL) {
			redirect('login/logout');
			exit();
		}

		if (checkRoleMenus($this->session->userdata('role_id'))) {
			redirect(base_url());
		}

		if ($this->session->userdata('role_id') != 1) {
			if ($this->session->userdata('role_id') == 2) {
				redirect('Dosen');
			} else if ($this->session->userdata('role_id') == 3) {
				redirect('Mahasiswa');
			} else {
				redirect(base_url());
			}
		}

		$this->load->model('mdata');
		$this->load->model('MTriDharma', 'mdharma');
		$this->load->model('MCategory', 'category');
	}

	public function index()
	{
		$this->load->view('admin/home');
	}

	public function home()
	{
		$this->load->view('admin/home');
	}

	//PROFIL
	public function profil()
	{
		$data['struk'] = $this->mdata->profil()->result();
		$this->load->view('admin/profil', $data);
	}

	public function ubahProfil($id)
	{
		$data['profil'] = $this->mdata->idprofil($id)->row();
		$this->load->view('admin/editProfil', $data);
	}

	public function updateprofil()
	{
		$data['id'] 		= $this->input->post('id');
		$data['sejarah']    = $this->input->post('sejarah');
		$data['visi'] 		= $this->input->post('visi');
		$data['misi'] 		= $this->input->post('misi');
		$data['tujuan'] 		= $this->input->post('tujuan');

		$id = $this->input->post('id');

		$this->mdata->updateprofil($id, $data);
		redirect(site_url('Admin/profil'));
	}

	//STRUKTUR
	public function struktur()
	{
		$data['struktur'] = $this->mdata->struktur()->result();
		$this->load->view('admin/struktur', $data);
	}

	public function ubahStruktur($id)
	{
		$data['struktur'] = $this->mdata->idstruktur($id)->row();
		$this->load->view('admin/editStruktur', $data);
	}


	public function updateStruktur()
	{
		$data = array(
			'id' 	=> $this->input->post('id')
		);

		if ($_FILES['file']['tmp_name'] != '') {

			$config['upload_path']          = './assets/images/';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg|gif|mp4|3gp|mpeg|mpg';

			$this->load->library('upload');
			$this->upload->initialize($config);

			$id = $this->input->post('id');

			$data['file'] = $this->mdata->idstruktur($id)->row();
			$a = $data['file']->file;


			if (file_exists('./assets/' . $a)) {
				unlink('assets/' . $a);
			}

			$status = $this->upload->do_upload('file');

			if ($status) {
				$upload_data = $this->upload->data();
				$data['file'] = 'images/' . $upload_data['file_name'];
			}
		}

		$id = $this->input->post('id');
		$this->mdata->updateStruktur($id, $data);
		$this->session->set_flashdata('notif', 'Berhasil disimpan');
		redirect(site_url('Admin/struktur'));
	}

	//DOSEN
	public function Dosen()
	{
		$data['dosen'] = $this->mdata->dosen()->result();
		$this->load->view('admin/dosen', $data);
	}

	public function addDosen()
	{
		$this->load->view('admin/addDosen');
	}

	public function insertDosen()
	{
		$data = array(
			'nip' 						=> $this->input->post('nip'),
			'nama' 						=> $this->input->post('nama'),
			'email'						=> $this->input->post('email'),
			'bidang' 					=> $this->input->post('bidang'),
			'pendidikan' 				=> $this->input->post('pendidikan'),
			'penelitian' 				=> $this->input->post('penelitian'),
			'pengabdian' 				=> $this->input->post('pengabdian'),
			'pelatihan' 				=> $this->input->post('pelatihan'),
			'file' 						=> $this->input->post('file')
		);

		$config['upload_path']          = './assets/images/dosen/';
		$config['max_size']             = 10000;
		$config['allowed_types'] 		= 'jpg|png|jpeg|gif|mp4|3gp|mpeg|mpg';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$status = $this->upload->do_upload('file');

		if ($data) {
			$upload_data = $this->upload->data();
			$name = $upload_data['file_name'];
			$data['file'] = 'dosen/' . $name;
			$this->mdata->insertdosen($data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan');
		}


		redirect(site_url('Admin/dosen'));
	}

	public function ubahDosen($id)
	{
		$data['dosen'] = $this->mdata->iddosen($id)->row();
		$this->load->view('admin/editDosen', $data);
	}

	public function updateDosen()
	{

		$data = array(
			'nip' 						=> $this->input->post('nip'),
			'nama' 						=> $this->input->post('nama'),
			'email'						=> $this->input->post('email'),
			'bidang' 					=> $this->input->post('bidang'),
			'pendidikan' 				=> $this->input->post('pendidikan'),
			'penelitian' 				=> $this->input->post('penelitian'),
			'pengabdian' 				=> $this->input->post('pengabdian'),
			'pelatihan' 				=> $this->input->post('pelatihan')
		);

		if ($_FILES['file']['tmp_name'] != '') {

			$config['upload_path']          = './assets/images/dosen/';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg|gif|mp4|3gp|mpeg|mpg';

			$this->load->library('upload');
			$this->upload->initialize($config);

			$id = $this->input->post('id');

			$data['file'] = $this->mdata->iddosen($id)->row();
			$a = $data['file']->file;


			if (file_exists('./assets/images/' . $a)) {
				unlink('assets/images/' . $a);
			}

			$status = $this->upload->do_upload('file');

			if ($status) {
				$upload_data = $this->upload->data();
				$data['file'] = 'dosen/' . $upload_data['file_name'];
			}
		}

		$id = $this->input->post('id');
		$this->mdata->updateDosen($id, $data);
		$this->session->set_flashdata('notif', 'Berhasil disimpan');
		redirect(site_url('Admin/dosen'));
	}


	public function hapusDosen($id)
	{
		$data['file'] = $this->mdata->iddosen($id)->row();
		$a = $data['file']->file;

		unlink('assets/images/' . $a);
		$this->mdata->deleteDosen($id);
		$this->session->set_flashdata('notif', 'Berhasil dihapus');
		redirect(site_url('admin/dosen'));
	}

	public function detailDosen($id)
	{
		$data['dosen'] = $this->mdata->iddosen($id)->row();
		$this->load->view('admin/detailDosen', $data);
	}

	//Tendik
	public function Tendik()
	{
		$data['tendik'] = $this->mdata->tendik()->result();
		$this->load->view('admin/tendik', $data);
	}

	public function addTendik()
	{
		$this->load->view('admin/addTendik');
	}

	public function insertTendik()
	{
		$data = array(
			'nik' 						=> $this->input->post('nik'),
			'nama' 						=> $this->input->post('nama'),
			'email'						=> $this->input->post('email'),
			'pelatihan' 				=> $this->input->post('pelatihan'),
			'file' 						=> $this->input->post('file')
		);

		$config['upload_path']          = './assets/images/staff';
		$config['max_size']             = 10000;
		$config['allowed_types'] 		= 'jpg|png|jpeg|JPG|PNG';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$status = $this->upload->do_upload('file');

		if ($data) {
			$upload_data = $this->upload->data();
			$name = $upload_data['file_name'];
			$data['file'] = 'images/staff/' . $name;
			$this->mdata->inserttendik($data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan');
		}


		redirect(site_url('admin/tendik'));
	}

	public function ubahTendik($id)
	{
		$data['tendik'] = $this->mdata->idtendik($id)->row();
		$this->load->view('admin/editTendik', $data);
	}

	public function updateTendik()
	{

		$data = array(
			'nik' 						=> $this->input->post('nik'),
			'nama' 						=> $this->input->post('nama'),
			'email'						=> $this->input->post('email'),
			'pelatihan' 				=> $this->input->post('pelatihan')
		);

		if ($_FILES['file']['tmp_name'] != '') {

			$config['upload_path']          = './assets/images/staff/';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg|gif|PNG|JPG';

			$this->load->library('upload');
			$this->upload->initialize($config);

			$id = $this->input->post('id');

			$data['file'] = $this->mdata->idtendik($id)->row();
			$a = $data['file']->file;


			if (file_exists('./assets/images/' . $a)) {
				unlink('./assets/images/' . $a);
			}

			$status = $this->upload->do_upload('file');

			if ($status) {
				$upload_data = $this->upload->data();
				$data['file'] = 'images/staff/' . $upload_data['file_name'];
			}
		}

		$id = $this->input->post('id');
		$this->mdata->updatetendik($id, $data);
		$this->session->set_flashdata('notif', 'Berhasil disimpan');
		redirect(site_url('Admin/tendik'));
	}


	public function hapusTendik($id)
	{
		$data['file'] = $this->mdata->idtendik($id)->row();
		$a = $data['file']->file;

		unlink('assets/images/' . $a);
		$this->mdata->deletetendik($id);
		$this->session->set_flashdata('notif', 'Berhasil dihapus');
		redirect(site_url('admin/tendik'));
	}

	public function detailTendik($id)
	{
		$data['tendik'] = $this->mdata->idtendik($id)->row();
		$this->load->view('admin/detailTendik', $data);
	}

	//Prestasi
	public function Prestasi()
	{
		$data['pres'] = $this->mdata->prestasi()->result();
		$this->load->view('admin/prestasi', $data);
	}

	public function addPrestasi()
	{
		$this->load->view('admin/addPrestasi');
	}

	public function insertPrestasi()
	{

		$data = array(
			'tahun' 	=> $this->input->post('tahun'),
			'isi' 		=> $this->input->post('isi')
		);



		$this->mdata->insertprestasi($data);
		$this->session->set_flashdata('notif', 'Berhasil disimpan');
		redirect(site_url('Admin/prestasi'));
	}

	public function ubahPrestasi($id)
	{
		$data['prestasi'] = $this->mdata->idprestasi($id)->row();
		$this->load->view('admin/editPrestasi', $data);
	}


	public function updatePrestasi()
	{

		$data = array(
			'tahun' 				=> $this->input->post('tahun'),
			'isi' 					=> $this->input->post('isi')
		);


		$id = $this->input->post('id');

		$this->mdata->updateprestasi($id, $data);
		redirect(site_url('admin/prestasi'));
	}

	public function hapusPrestasi($id)
	{
		$data['prestasi'] = $this->mdata->idprestasi($id)->row();

		$this->mdata->deleteprestasi($id);
		$this->session->set_flashdata('notif', 'Berhasil dihapus');
		redirect(site_url('admin/prestasi'));
	}



	//KP SKRIPSI
	public function kpskripsi()
	{
		$data['kpskrip'] = $this->mdata->kpskrip()->result();
		$this->load->view('admin/kp&skripsi', $data);
	}

	public function ubahKpSkripsi($id)
	{
		$data['kpskrip'] = $this->mdata->idkpskrip($id)->row();
		$this->load->view('admin/editKPSkripsi', $data);
	}

	public function updateKpSkripsi()
	{

		$data = array(
			'kp' 						=> $this->input->post('kp'),
			'skripsi' 					=> $this->input->post('skripsi')
		);


		$id = $this->input->post('id');

		$this->mdata->updatekpskrip($id, $data);
		redirect(site_url('admin/KPskripsi'));
	}


	//sarana
	public function Sarana()
	{
		//$data['struk'] = $this->mdata->profil()->result();
		$this->load->view('admin/sarana');
	}

	public function ubahSarana($id)
	{
		//$data['profil'] = $this->mdata->idprofil($id)->row();
		$this->load->view('admin/editSarana');
	}




	//DOWNLOAD	
	public function download()
	{
		$data['download'] = $this->mdata->download()->result();
		$this->load->view('admin/download', $data);
	}


	public function insert()
	{
		$this->load->view('admin/addFile');
	}

	public function insertfile()
	{
		$data = array(
			'file'		 	=> $this->input->post('file'),
			'keterangan' 	=> $this->input->post('keterangan')
		);

		$config['upload_path']          = './assets/file';
		$config['max_size']             = 10000;
		$config['allowed_types'] 		= 'jpg|png|jpeg|gif|mp4|doc|docx|xls|pdf|ppt|pptx|rar|zip';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$status = $this->upload->do_upload('file');

		if ($data) {
			$upload_data = $this->upload->data();
			$name = $upload_data['file_name'];
			$data['file'] = 'file/' . $name;
			$this->mdata->insert($data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan, <a href="slide">Kembali.</a>');
		}


		redirect(site_url('admin/download'));
	}

	public function ubahfile($id)
	{
		$data['download'] = $this->mdata->iddwn($id)->row();
		$this->load->view('admin/editFile', $data);
	}

	public function updatefile()
	{

		$data = array(
			'id' 	              => $this->input->post('id'),
			'keterangan' 		=> $this->input->post('keterangan')
		);

		if ($_FILES['file']['tmp_name'] != '') {

			$config['upload_path']          = './assets/file';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg|gif|mp4|doc|docx|xls|pdf|ppt|pptx|rar|zip';

			$this->load->library('upload');
			$this->upload->initialize($config);

			$id = $this->input->post('id');

			$data['file'] = $this->mdata->iddwn($id)->row();
			$a = $data['file']->file;


			if (file_exists('./assets/' . $a)) {
				unlink('./assets/' . $a);
			}

			$status = $this->upload->do_upload('file');

			if ($status) {
				$upload_data = $this->upload->data();
				$data['file'] = 'file/' . $upload_data['file_name'];
			}
		}

		$id = $this->input->post('id');
		$this->mdata->updatefile($id, $data);
		$this->session->set_flashdata('notif', 'Berhasil disimpan');
		redirect(site_url('admin/download'));
	}


	public function hapusfile($id)
	{
		$data['file'] = $this->mdata->iddwn($id)->row();
		$a = $data['file']->file;

		unlink('assets/' . $a);
		$this->mdata->deletedwn($id);
		$this->session->set_flashdata('notif', 'Berhasil dihapus');
		redirect(site_url('admin/download'));
	}


	//BERITA UMUM
	public function Berita()
	{
		$data['berita'] = $this->mdata->all_berita()->result();
		$this->load->view('admin/berita', $data);
	}


	public function addberita()
	{
		$data['author'] = $this->mdata->getAllAdmin();
		$data['categories'] = $this->category->getAll();

		$this->load->view('admin/addBerita', $data);
	}

	public function insertberita()
	{
		$user_id = $this->input->post('user_id') ? $this->input->post('user_id') : $this->session->userdata('user_id');
		$data = array(
			'judul' 			=> $this->input->post('judul'),
			'category_id' => $this->input->post('category_id'),
			'user_id' 		=> $user_id,
			'tgl' 			=> $this->input->post('tgl'),
			'isi' 				=> $this->input->post('isi'),
			'file' 				=> $this->input->post('file'),
		);

		$config['upload_path']          = './assets/images/berita';
		$config['max_size']             = 10000;
		$config['allowed_types'] 		= 'jpg|png|jpeg|JPG|PNG';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$status = $this->upload->do_upload('file');

		if ($data) {
			$upload_data = $this->upload->data();
			$name = $upload_data['file_name'];
			$data['file'] = 'berita/' . $name;
			$this->mdata->insertberita($data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan');
		}


		redirect(site_url('Admin/berita'));
	}

	public function ubahberita($id)
	{
		$data['author'] = $this->mdata->getAllAdmin();
		$data['berita'] = $this->mdata->idberita($id)->row();
		$data['categories'] = $this->category->getAll();
		$this->load->view('admin/editBerita', $data);
	}

	public function updateberita()
	{
		$user_id = $this->input->post('user_id') ? $this->input->post('user_id') : $this->session->userdata('user_id');

		$data = array(
			'id' 			=> $this->input->post('id'),
			'category_id' => $this->input->post('category_id'),
			'judul' 		=> $this->input->post('judul'),
			'tgl' 			=> $this->input->post('tgl'),
			'isi' 			=> $this->input->post('isi'),
			'user_id'  		=> $user_id
		);

		if ($_FILES['file']['tmp_name'] != '') {

			$config['upload_path']          = './assets/images/berita/';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg|JPG|PNG';

			$this->load->library('upload');
			$this->upload->initialize($config);

			$id = $this->input->post('id');

			$data['file'] = $this->mdata->idberita($id)->row();
			$a = $data['file']->file;


			if (file_exists('./assets/images/' . $a)) {
				unlink('./assets/images/' . $a);
			}

			$status = $this->upload->do_upload('file');

			if ($status) {
				$upload_data = $this->upload->data();
				$data['file'] = 'berita/' . $upload_data['file_name'];
			}
		}

		$id = $this->input->post('id');
		$this->mdata->update_berita($id, $data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success">Berhasil disimpan</div>');
		redirect(site_url('admin/berita'));
	}


	public function deleteberita($id)
	{
		$data['file'] = $this->mdata->idberita($id)->row();
		$a = $data['file']->file;

		unlink('assets/images/' . $a);
		$this->mdata->delete_berita($id);
		$this->session->set_flashdata('notif', 'Berhasil dihapus');
		redirect(site_url('admin/berita'));
	}

	public function beritaadmin($id)
	{
		$data['berita'] = $this->mdata->idberita($id)->row();
		if ($data['berita']) {
			$this->load->view('admin/beritaadmin', $data);
		} else {
			redirect('admin/berita');
		}
	}

	/*		
	//Info Jurusan
	public function infoJurusan()
	{
		$data['info'] = $this->mdata->all_info()->result();
		$this->load->view('admin/infoJurusan', $data);
	}

	public function addinfo()
	{
		$this->load->view('admin/addInfo');
	}

	public function ubahinfo($id)
	{	
		$data['info'] = $this->mdata->idinfo($id)->row();
		$this->load->view('admin/editInfo', $data);
	}
	
	public function insertinfo()
		{
			$data = array(
					
					'nama' 				=> $this->input->post('nama'), 
					'tgl' 				=> $this->input->post('tgl'),
					'isi' 				=> $this->input->post('isi'), 
					'file' 				=> $this->input->post('file')
					);
			
				$config['upload_path']          = './assets/images/info';
				$config['max_size']             = 10000;
				$config['allowed_types'] 		= 'jpg|png|jpeg';
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				
				$status = $this->upload->do_upload('file');
				
			if($data){
				$upload_data= $this->upload->data();
				$name = $upload_data['file_name'];
				$data['file'] = 'info/'.$name;
				$this->mdata->insertinfo($data);
				$this->session->set_flashdata('notif', 'Berhasil disimpan');
			}
			

			redirect(site_url('Admin/infoJurusan'));
		}

	public function updateinfo()
		{
				
			$data = array(
				'id' 		=> $this->input->post('id'),
				'nama' 		=> $this->input->post('nama'), 
				'tgl' 		=> $this->input->post('tgl'),
				'isi' 		=> $this->input->post('isi')
				);
				
			if($_FILES['file']['tmp_name'] != '') {			
			
			$config['upload_path']          = './assets/info/';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg';
			
			$this->load->library('upload');
			$this->upload->initialize($config);
			
			$id=$this->input->post('id');
			
			$data['file'] = $this->mdata->id($id)->row();
			$a=$data['file']->file;
			
						
			if(file_exists('./assets/images'.$a)) 
				{
					unlink('assets/images'.$a);
				}
			
			$status = $this->upload->do_upload('file');
			
			if($status) 
				{
					$upload_data = $this->upload->data();
					$data['file'] ='info/'.$upload_data['file_name']; 
				}
		}
			
			$id=$this->input->post('id');
			$this->mdata->update_info($id, $data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan');
			redirect(site_url('Admin/infoJurusan'));
		}
		
    	
	public function deleteinfo($id)
		 {
			$data['file'] = $this->mdata->idinfo($id)->row();
			$a=$data['file']->file;
			
			unlink('assets/images/'.$a);			
			$this->mdata->delete_info($id);
			$this->session->set_flashdata('notif', 'Berhasil dihapus');
			redirect(site_url('admin/infoJurusan'));
		}
//INFO JURUSAN


		
	//Kegiatan
	public function kegiatan()
	{
		$data['kegiatan'] = $this->mdata->all_kegiatan()->result();
		$this->load->view('admin/Kegiatan', $data);
	}

	public function addkegiatan()
	{
		$this->load->view('admin/addKegiatan');
	}

	public function ubahkegiatan($id)
	{	
		$data['info'] = $this->mdata->idkegiatan($id)->row();
		$this->load->view('admin/editKegiatan', $data);
	}
	
	public function insertkegiatan()
		{
			$data = array(
					
					'nama' 				=> $this->input->post('nama'), 
					'tgl' 				=> $this->input->post('tgl'),
					'isi' 				=> $this->input->post('isi'), 
					'file' 				=> $this->input->post('file')
					);
			
				$config['upload_path']          = './assets/images/kegiatan';
				$config['max_size']             = 10000;
				$config['allowed_types'] 		= 'jpg|png|jpeg';
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				
				$status = $this->upload->do_upload('file');
				
			if($data){
				$upload_data= $this->upload->data();
				$name = $upload_data['file_name'];
				$data['file'] = 'kegiatan/'.$name;
				$this->mdata->insertkegiatan($data);
				$this->session->set_flashdata('notif', 'Berhasil disimpan');
			}
			

			redirect(site_url('Admin/kegiatan'));
		}

	public function updatekegiatan()
		{
				
			$data = array(
				'id' 		=> $this->input->post('id'),
				'nama' 		=> $this->input->post('nama'), 
				'tgl' 		=> $this->input->post('tgl'),
				'isi' 		=> $this->input->post('isi')
				);
				
			if($_FILES['file']['tmp_name'] != '') {			
			
			$config['upload_path']          = './assets/kegiatan/';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg';
			
			$this->load->library('upload');
			$this->upload->initialize($config);
			
			$id=$this->input->post('id');
			
			$data['file'] = $this->mdata->id($id)->row();
			$a=$data['file']->file;
			
						
			if(file_exists('./assets/images'.$a)) 
				{
					unlink('assets/images'.$a);
				}
			
			$status = $this->upload->do_upload('file');
			
			if($status) 
				{
					$upload_data = $this->upload->data();
					$data['file'] ='kegiatan/'.$upload_data['file_name']; 
				}
		}
			
			$id=$this->input->post('id');
			$this->mdata->update_kegiatan($id, $data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan');
			redirect(site_url('Admin/kegiatan'));
		}
		
    	
	public function deletekegiatan($id)
		 {
			$data['file'] = $this->mdata->idkegiatan($id)->row();
			$a=$data['file']->file;
			
			unlink('assets/images/'.$a);			
			$this->mdata->delete_kegiatan($id);
			$this->session->set_flashdata('notif', 'Berhasil dihapus');
			redirect(site_url('admin/kegiatan'));
		}
//KEGIATAN
		
*/
	//SLIDE
	public function slide()
	{
		$data['slide'] = $this->mdata->all_slide()->result();
		$this->load->view('admin/slide', $data);
	}

	public function addslide()
	{
		$this->load->view('admin/addSlide');
	}

	public function insertslide()
	{
		$data = array(
			'file'		 	=> $this->input->post('file'),
			'link' 		=> $this->input->post('link')
		);

		$config['upload_path']          = './assets/images/slide';
		$config['max_size']             = 10000;
		$config['allowed_types'] 		= 'jpg|png|jpeg|gif|mp4|3gp|mpeg|mpg';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$status = $this->upload->do_upload('file');

		if ($data) {
			$upload_data = $this->upload->data();
			$name = $upload_data['file_name'];
			$data['file'] = 'slide/' . $name;
			$this->mdata->insertslide($data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan, <a href="slide">Kembali.</a>');
		}


		redirect(site_url('admin/slide'));
	}

	public function ubahslide($id)
	{
		$data['slide'] = $this->mdata->idslide($id)->row();
		$this->load->view('admin/editslide', $data);
	}

	public function updateslide()
	{

		$data = array(
			'id' 	  => $this->input->post('id'),
			'link' 		=> $this->input->post('link')
		);

		if ($_FILES['file']['tmp_name'] != '') {

			$config['upload_path']          = './assets/images/slide/';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg';

			$this->load->library('upload');
			$this->upload->initialize($config);

			$id = $this->input->post('id');

			$data['file'] = $this->mdata->idslide($id)->row();
			$a = $data['file']->file;


			if (file_exists('./assets/images/' . $a)) {
				unlink('./assets/images/' . $a);
			}

			$status = $this->upload->do_upload('file');

			if ($status) {
				$upload_data = $this->upload->data();
				$data['file'] = 'slide/' . $upload_data['file_name'];
			}
		}

		$id = $this->input->post('id');
		$this->mdata->update_slide($id, $data);
		$this->session->set_flashdata('notif', 'Berhasil disimpan');
		redirect(site_url('admin/slide'));
	}


	public function hapusslide($id)
	{
		$data['file'] = $this->mdata->idslide($id)->row();
		$a = $data['file']->file;

		unlink('assets/images/' . $a);
		$this->mdata->delete_slide($id);
		$this->session->set_flashdata('notif', 'Berhasil dihapus, <a href="slide">Kembali.</a>');
		redirect(site_url('admin/slide'));
	}





	//PROF Admin
	public function profadmin()
	{
		$data['admin'] = $this->mdata->profadmin()->row();
		$this->load->view('admin/admin', $data);
	}

	public function ubahadmin($id)
	{
		$data['admin'] = $this->mdata->idadmin($id)->row();
		$this->load->view('admin/editakun', $data);
	}

	public function updateadmin()
	{

		$data['id'] 		= $this->input->post('id');
		$data['username'] 		= $this->input->post('username');
		$data['password'] 		= md5($this->input->post('password'));

		$id = $this->input->post('id');

		$this->mdata->updateadmin($id, $data);
		redirect(site_url('admin/profadmin'));
	}
}
