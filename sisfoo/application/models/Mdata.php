<?php
	class Mdata extends CI_Model {
	function __construct(){
	parent::__construct();
	$this->load->database();

	}
	
		function profil()
		{
			$this->db->select('*');
			$this->db->from('profil');
			$this->db->order_by('id','desc');
			return $this->db->get();
		}

		function idprofil($id)
		{
			$this->db->select('*');
			$this->db->from('profil');
			$this->db->where('id', $id);
			return $this->db->get();
		}
		
		function updateprofil($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update('profil', $data);
		}
		
		
		
		function struktur()
		{
			$this->db->select('*');
			$this->db->from('struktur');
			$this->db->order_by('id','desc');
			return $this->db->get();
		}
		function idstruktur($id)
		{
			$this->db->select('*');
			$this->db->from('struktur');
			$this->db->where('id', $id);
			return $this->db->get();
		}

		function updateStruktur($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update('struktur', $data);
		}
		
		
		//DOSEN
		function dosen()
		{
			$this->db->select('*');
			$this->db->from('dosen');
			$this->db->order_by('id','asc');
			return $this->db->get();
		}

		function iddosen($id)
		{
			$this->db->select('*');
			$this->db->from('dosen');
			$this->db->where('id', $id);
			return $this->db->get();
		}
		
		function insertdosen($data)
		{
			$this->db->insert('dosen', $data);
		}
		
		function updateDosen($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update('dosen', $data);
		}
		
		function deletedosen($id)
		{
			$row = $this->db->where('id',$id);
			$this->db->delete('dosen');
		}
		
		
		function limit_dosen($limit, $start){
        $query = $this->db->get('dosen', $limit, $start);
        return $query;
    }
		
		
		//TENDIK
		
		function tendik()
		{
			$this->db->select('*');
			$this->db->from('staff');
			$this->db->order_by('id','asc');
			return $this->db->get();
		}
		
		function idtendik($id)
		{
			$this->db->select('*');
			$this->db->from('staff');
			$this->db->where('id', $id);
			return $this->db->get();
		}
        
        function inserttendik($data)
		{
			$this->db->insert('staff', $data);
		}

		function updatetendik($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update('staff', $data);
		}
		
		function deletetendik($id)
		{
			$row = $this->db->where('id',$id);
			$this->db->delete('staff');
		}
		
		function limit_staff($limit, $start){
        $query = $this->db->get('staff', $limit, $start);
        return $query;
        }
		//AKADEMIK
		
		function akademik()
		{
			$this->db->select('*');
			$this->db->from('kalendar');
			$this->db->order_by('id','desc');
			return $this->db->get();
		}
		
		function idakademik($id)
		{
			$this->db->select('*');
			$this->db->from('kalendar');
			$this->db->where('id', $id);
			return $this->db->get();
		}
		
		function updateakademik($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update('kalendar', $data);
		}
		
		
		//KURIKULUM
		
		function kurikulum()
		{
			$this->db->select('*');
			$this->db->from('kurikulum');
			$this->db->order_by('id','desc');
			return $this->db->get();
		}
		
		function idkurikulum($id)
		{
			$this->db->select('*');
			$this->db->from('kurikulum');
			$this->db->where('id', $id);
			return $this->db->get();
		}
		function insertkurikulum($data)
		{
			$this->db->insert('kurikulum', $data);
		}
		function updateKurikulum($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update('kurikulum', $data);
		}
		
		function deletekurikulum($id)
		{
			$row = $this->db->where('id',$id);
			$this->db->delete('kurikulum');
		}
		
		//PRESTASI
		
		function prestasi()
		{
			$this->db->select('*');
			$this->db->from('prestasi');
			$this->db->order_by('id','desc');
			return $this->db->get();
		}
		function insertprestasi($data)
		{
			$this->db->insert('prestasi', $data);
		}
		function idprestasi($id)
		{
			$this->db->select('*');
			$this->db->from('prestasi');
			$this->db->where('id', $id);
			return $this->db->get();
		}
		function updateprestasi($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update('prestasi', $data);
		}
		
		function deleteprestasi($id)
		{
			$row = $this->db->where('id',$id);
			$this->db->delete('prestasi');
		}
		
		//KP
		
		function kpskrip()
		{
			$this->db->select('*');
			$this->db->from('kp');
			$this->db->order_by('id','desc');
			return $this->db->get();
		}
		
		function idkpskrip($id)
		{
			$this->db->select('*');
			$this->db->from('kp');
			$this->db->where('id', $id);
			return $this->db->get();
		}
		
		function updatekpskrip($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update('kp', $data);
		}
		
		
		//download
        
		function download()
		{
			$this->db->select('*');
			$this->db->from('file');
			$this->db->order_by('id','desc');
			return $this->db->get();
		}
		
		function iddwn($id)
		{
			$this->db->select('*');
			$this->db->from('file');
			$this->db->where('id', $id);
			return $this->db->get();
		}
		
		function insert($data)
		{
			$this->db->insert('file', $data);
		}
		
		
		function updatefile($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update('file', $data);
		}
		
		
		function deletedwn($id)
		{
			$row = $this->db->where('id',$id);
			$this->db->delete('file');
		}
		
		
		//BERITA
		
		function insertberita($data)
		{
			$this->db->insert('berita', $data);
		}

		function all_berita()
		{
			$this->db->select('*');
			$this->db->from('berita');
			$this->db->order_by('tgl','desc');
			return $this->db->get();
		}

		function idberita($id)
		{
			$this->db->select('*');
			$this->db->from('berita');
			$this->db->where('id', $id);
			return $this->db->get();
		}
		
		function update_berita($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update('berita', $data);
					

		}
		
		function delete_berita($id)
		{
			$row = $this->db->where('id',$id);
			$this->db->delete('berita');
		}
		
		function limit_berita($limit, $start){
        $query = $this->db->get('berita', $limit, $start);
        return $query;
        }
        
        function limit_ber($limit=array())
		{
			$this->db->select('*');
			$this->db->from('berita');
			$this->db->order_by('tgl', 'desc');
			 if ($limit != NULL)
			$this->db->limit($limit['perpage'], $limit['offset']);

			return $this->db->get();
		 }
		 //INFO JURUSAN
		 function all_info()
		{
			$this->db->select('*');
			$this->db->from('info_jurusan');
			$this->db->order_by('tgl','desc');
			return $this->db->get();
		}

		function insertinfo($data)
		{
			$this->db->insert('info_jurusan', $data);
		}
		 
		function idinfo($id)
		{
			$this->db->select('*');
			$this->db->from('info_jurusan');
			$this->db->where('id', $id);
			return $this->db->get();
		}
		
		function update_info($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update('info_jurusan', $data);
					

		}
		
		function delete_info($id)
		{
			$row = $this->db->where('id',$id);
			$this->db->delete('info_jurusan');
		}

		function limit_info($limit=array())
		{
			$this->db->select('*');
			$this->db->from('info_jurusan');
			$this->db->order_by('tgl', 'desc');
			 if ($limit != NULL)
			$this->db->limit($limit['perpage'], $limit['offset']);

			return $this->db->get();
		 }

		 //KEGIATAN
		 	 function all_kegiatan()
		{
			$this->db->select('*');
			$this->db->from('info_kegiatan');
			$this->db->order_by('tgl','desc');
			return $this->db->get();
		}

		function insertkegiatan($data)
		{
			$this->db->insert('info_kegiatan', $data);
		}
		 
		function idkegiatan($id)
		{
			$this->db->select('*');
			$this->db->from('info_kegiatan');
			$this->db->where('id', $id);
			return $this->db->get();
		}
		
		function update_kegiatan($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update('info_kegiatan', $data);
					

		}
		
		function delete_kegiatan($id)
		{
			$row = $this->db->where('id',$id);
			$this->db->delete('info_kegiatan');
		}

		function limit_kegiatan($limit=array())
		{
			$this->db->select('*');
			$this->db->from('info_kegiatan');
			$this->db->order_by('tgl', 'desc');
			 if ($limit != NULL)
			$this->db->limit($limit['perpage'], $limit['offset']);

			return $this->db->get();
		 }

        //SLIDE
			function insertslide($data)
		{
			$this->db->insert('slide', $data);
		}

		function all_slide()
		{
			$this->db->select('*');
			$this->db->from('slide');
			$this->db->order_by('id','desc');
			return $this->db->get();
		}

		function idslide($id)
		{
			$this->db->select('*');
			$this->db->from('slide');
			$this->db->where('id', $id);
			return $this->db->get();
		}
		
		function update_slide($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update('slide', $data);
					

		}
		
		function delete_slide($id)
		{
			$row = $this->db->where('id',$id);
			$this->db->delete('slide');
		}

		//ADMIN
		
		function profadmin()
		{
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->order_by('id','desc');
			return $this->db->get();
		}

		function idadmin($id)
		{
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where('id', $id);
			return $this->db->get();
		}
		
		function updateadmin($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update('admin', $data);
		}
		 
		 
	//user
	
		//Kalendar akademik
		function kalendar()
		{
			$this->db->select('*');
			$this->db->from('kalendar');
			$this->db->order_by('id','desc');
			return $this->db->get();
		}

	
		//KP
		function kp()
		{
			$this->db->select('*');
			$this->db->from('kp');
			$this->db->order_by('id','desc');
			return $this->db->get();
		}	
		 
}

