<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.p	hp/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('mdata');
		$this->load->model('MEvent', 'event');
		$this->load->model('MGallery', 'gallery');
		$this->load->model('MSpecialization', 'specialization');
		$this->load->model('MTriDharma', 'tridharma');
		$this->load->model('MFasilitas', 'fasilitas');
		$this->load->model('MKerjaPraktik', 'kerja_praktik');
		$this->load->model('MSkripsi', 'skripsi');
		$this->load->model('MOrganisasiMahasiswa', 'organisasi_mahasiswa');
		$this->load->model('MPrestasi', 'prestasi');
		$this->load->model('MAlumni', 'alumni');
		$this->load->model('MWisuda', 'wisuda');
		$this->load->model('MKurikulum', 'kurikulum');
		$this->load->model('MKalender', 'kalender');
		$this->load->model('MAkademik', 'akademik');
		$this->load->model('MLowker', 'lowker');
		$this->load->model('MGrafik', 'grafik');
		//$this->load->view('admin/head');
		//$this->load->view('sidebar');
	}

	public function index($offset = 0)
	{
		//berita limit
		$page = 8;

		// load library pagination
		$this->load->library('pagination');

		// konfigurasi tampilan paging
		$configb = array(
			'base_url' => site_url('sisfo/'),
			'total_rows' => count($this->mdata->limit_ber()->result()),
			'per_page' => $page,
		);

		// inisialisasi pagination dan config
		$this->pagination->initialize($configb);
		$limitberita['perpage'] = $page;
		$limitberita['offset'] = $offset;
		//berita

		/* $page = 5;
		
		$this->load->library('pagination');
		
		$config = array(
			'base_url' 		=> site_url('sisfo/'),
			'total_rows'	=> count($this->mdata->limit_kegiatan()->result()),
			'per_page' 		=> $page,
        );
		
        $this->pagination->initialize($config);
        $limitinfo['perpage'] 	= $page;
        $limitinfo['offset'] 	= $offset;
        //info jurusan

        //info Kegiatan
       $page = 4;
		
		$this->load->library('pagination');
		
		$configx = array(
			'base_url' 		=> site_url('sisfo/'),
			'total_rows'	=> count($this->mdata->limit_kegiatan()->result()),
			'per_page' 		=> $page,
        );
		
        $this->pagination->initialize($configx);
        $limitkegiatan['perpage'] 	= $page;
        $limitkegiatan['offset'] 	= $offset;*/
		//info kegiatan

		$data['berita']     = $this->mdata->limit_ber($limitberita)->result();
		/*$data['info'] 		= $this->mdata->limit_info($limitinfo)->result();
		$data['kegiatan'] 		= $this->mdata->limit_kegiatan($limitkegiatan)->result();*/
		$data['slide']      = $this->mdata->all_slide()->result_array();
		$data['events'] = $this->event->getAllActive();
		$data['galleries'] = $this->gallery->getAll();

		$this->load->view('index', $data);
	}

	public function berita($offset = 0)
	{
		$this->load->library('pagination');

		$config['base_url'] = site_url('sisfo/berita/'); //site url
		$config['total_rows'] = $this->db->count_all('berita'); //total row
		$config['per_page'] = 3;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<li class="page-item"><span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		//panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
		$data['data'] = $this->mdata->limit_berita($config["per_page"], $data['page']);
		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('berita', $data);
	}

	public function detailberita($id)
	{
		$data['berita'] = $this->mdata->idberita($id)->row();
		$this->load->view('detailberita', $data);
	}


	public function visimisi()
	{
		$data['profil'] = $this->mdata->profil()->row_object();
		$this->load->view('visimisi', $data);
	}

	public function Kurikulum()
	{
		$data['kurikulum'] = $this->kurikulum->getAll();
		$this->load->view('kurikulum', $data);
	}

	public function download()
	{
		// 		$data['file'] = $this->mdata->download()->result();
		$data['specializations'] = $this->specialization->getAll();
		$this->load->view('download', $data);
	}

	//$data['profil'] = $this->mdata->profil()->result();
	public function kontak()
	{
		$this->load->model('MQuestion', 'question');
		//$data['profil'] = $this->mdata->profil()->result();
		$this->form_validation->set_rules('name', 'Nama', 'required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('question', 'Pertanyaan', 'required|min_length[5]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('kontak');
		} else {
			$data = [
				'name' => $this->input->post('name', true),
				'email' => $this->input->post('email',true),
				'quest' => $this->input->post('question', true)
			];

			if ($this->question->insert($data)) {
				$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil mengirimkan pertanyaan</div>');
			} else {
				$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal mengirimkan pertanyaan</div>');
			}

			redirect(base_url("home/kontak"));
		}
	}


	public function strukor($offset = 0)
	{
		$page = 5;

		$this->load->library('pagination');

		$config = array(
			'base_url'         => site_url('ifupnyk/'),
			'total_rows'    => count($this->mdata->limit_kegiatan()->result()),
			'per_page'         => $page,
		);

		$this->pagination->initialize($config);
		$limitinfo['perpage']     = $page;
		$limitinfo['offset']     = $offset;
		//info jurusan

		$data['struktur'] = $this->mdata->struktur()->result();
		$data['info']         = $this->mdata->limit_info($limitinfo)->result();

		$this->load->view('strukor', $data);
	}

	public function dosen($offset = 0)
	{
		//galeri limit
		//konfigurasi pagination
		$this->load->library('pagination');

		$config['base_url'] = site_url('home/dosen/'); //site url
		$config['total_rows'] = $this->db->count_all('dosen'); //total row
		$config['per_page'] = 8;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<li class="page-item"><span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		//panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
		$data['data'] = $this->mdata->limit_dosen($config["per_page"], $data['page']);
		$data['pagination'] = $this->pagination->create_links();


		$this->load->view('dosen2', $data);
	}

	public function tendik()
	{
		//galeri limit
		//konfigurasi pagination
		$this->load->library('pagination');

		$config['base_url'] = site_url('sisfo/tendik/'); //site url
		$config['total_rows'] = $this->db->count_all('staff'); //total row
		$config['per_page'] = 8;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<li class="page-item"><span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		//panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
		$data['data'] = $this->mdata->limit_staff($config["per_page"], $data['page']);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('tendik', $data);
	}

	public function akademik()
	{
		$data['akademik'] = $this->kalender->getAll();
		$this->load->view('akademik', $data);
	}

	//prestasi
	public function prestasi()
	{
		$data['prestasi'] = $this->prestasi->getActive();

		// $this->load->view('prestasi', $data);
		$this->load->view('prestasi',$data);
	}
	
	public function detailprestasi($id)
	{
	    $data['prestasi'] = $this->prestasi->get($id);
	    $this->load->view('detailprestasi',$data);
	}

	//kp
	public function KP()
	{
		$data['kp'] = $this->mdata->kp()->result();

		$this->load->view('kerjapraktek', $data);
	}

	// Function Baru dan Perlu penambahan data dan penyesuaian
	public function detailDosen($id)
	{
		$data['dosen'] = $this->mdata->iddosen($id)->row();
		$this->load->view('detailDosen', $data);
	}

	public function sejarah()
	{
		$data['profil'] = $this->mdata->profil()->row_object();
		$this->load->view('sejarah', $data);
	}

	public function sambutan()
	{
	    $data['profil'] = $this->mdata->profil()->row_object();
		$this->load->view('sambutan',$data); // Statis
	}

	public function applist()
	{
		$this->load->view('applist'); // Statis
	}

	public function organisasiMahasiswa()
	{
	    $data['organisasi'] = $this->organisasi_mahasiswa->getActive();
		$this->load->view('organisasiMahasiswa',$data);
	}

	public function karier()
	{
		$this->load->view('karier');
	}

	public function alumni()
	{
	    $data['alumni'] = $this->alumni->getActive();
		$this->load->view('alumni',$data);
	}
	
	public function detail_alumni($id){
	    $data['alumni'] = $this->alumni->get($id);
	    $this->load->view('detail_alumni',$data);
	    
	}

	public function informasiWisuda()
	{
	    $data['wisuda'] = $this->wisuda->getActive();
		$this->load->view('informasiWisuda',$data);
	}
	
	public function detail_wisuda($id){
	    $data['wisuda'] = $this->wisuda->get($id);
	    $this->load->view('detail_wisuda',$data);
	    
	}

	public function organisasiDosen()
	{
		$this->load->view('organisasiDosen'); // Statis
	}

	public function beritaDosen()
	{
		$data['berita'] = $this->mdata->beritabyRole(2);
		$this->load->view('beritaDosen', $data);
	}

	public function beritaMahasiswa()
	{
		$data['berita'] = $this->mdata->beritabyRole(3);
		$this->load->view('beritaMahasiswa', $data);
	}

	public function informasiAkademik()
	{
	    $data['akademik'] = $this->akademik->getAll();
		$this->load->view('informasiAkademik',$data);
	}
	
	public function detailAkademik($id)
	{
	    $data['akademik'] = $this->akademik->get($id);
	    $this->load->view('detailAkademik',$data);
	}

	public function informasiGrafik()
	{
	    $data['grafik'] = $this->grafik->getAllGrafik();
		$data['isi_grafik'] = $this->grafik->getAllIsiGrafik();
		
		$this->load->view('informasiGrafik',$data);
	}

	public function event()
	{
		$data['events'] = $this->event->getAllActive();
		$this->load->view('event', $data);
	}

	public function detailEvent($id)
	{
		$data['event'] = $this->event->getActive($id);

		if ($data['event']) {
			$this->load->view('detailEvent', $data);
		} else {
			redirect('home');
		}
	}

	public function triDharma()
	{
	    $data['pengajaran'] = $this->tridharma->getPengajaranActive();
	    $data['penelitian'] = $this->tridharma->getPenelitianActive();
	    $data['pengabdian'] = $this->tridharma->getPengabdianActive();
		$this->load->view('tri_dharma',$data);
	}
	
	public function detailpengajaran($id)
	{
	    $data['pengajaran'] = $this->tridharma->get($id);
	    $this->load->view('detailpengajaran',$data);
	}
	public function detailpenelitian($id)
	{
	    $data['penelitian'] = $this->tridharma->getPenelitian($id);
	    $this->load->view('detailpenelitian',$data);
	}
	public function detailpengabdian($id)
	{
	    $data['pengabdian'] = $this->tridharma->getPengabdian($id);
	    $this->load->view('detailpengabdian',$data);
	}

	public function fasilitas()
	{
	    $data['fasilitas'] = $this->fasilitas->getActive();
		$this->load->view('fasilitas',$data);
	}

	public function informasilowker()
	{
	    $data['lowker'] = $this->lowker->getAll();
		$this->load->view('informasilowker',$data);
	}
	public function detailLowker($id)
	{
	    $data['lowker'] = $this->lowker->get($id);
	    $this->load->view('detailLowker',$data);
	}

	public function skripsi()
	{
	    $data['skripsi'] = $this->skripsi->getActive();
		$this->load->view('skripsi', $data);
	}
	
	public function detailskripsi($id){
	    $data['skripsi'] = $this->skripsi->get($id);
	    $this->load->view('detailskripsi',$data);
	    
	}

	public function kerja_praktik()
	{
	    $data['kp'] = $this->kerja_praktik->getActive();
		$this->load->view('kerja_praktik',$data);
	}
	
	public function detail_kerja_praktik($id){
	    $data['kp'] = $this->kerja_praktik->get($id);
	    $this->load->view('detailkp',$data);
	    
	}
}
