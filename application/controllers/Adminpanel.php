<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminpanel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Helper_model', 'Helper');
		$this->load->model('Admin_model', 'Admin');
		$this->load->model('Donasi_model', 'Donasi');
		$this->load->model('Blog_model', 'Blog');
		$this->load->library('form_validation');
		$this->Admin->cek_login();
	}

	public function index()
	{
		$main['provinsi'] = $this->Donasi->provinsi();
		$main['bank'] = $this->Donasi->bank();
		$this->Admin->view('admin/dashboard', $main);
	}

	// #######################
	// DONASI

	public function donasi()
	{
		$main['donasi'] = $this->Admin->donasi();
		$this->Admin->view('admin/donasi_konfirmasi', $main);
	}

	public function editdonasi($id_donasi = "")
	{
		if ($id_donasi != ""){

			$this->form_validation->set_rules('name', 'nama lengkap', 'trim|required|xss_clean');
			$this->form_validation->set_rules('phone', 'no. handphone', 'trim|numeric|xss_clean|required');
			$this->form_validation->set_rules('email', 'email', 'trim|xss_clean|valid_email|required');
			$this->form_validation->set_rules('provinsi', 'provinsi', 'numeric|required');
			$this->form_validation->set_rules('amount', 'amount', 'trim|numeric|xss_clean|required');
			$this->form_validation->set_rules('message', 'keterangan', 'trim|xss_clean');
			$this->form_validation->set_rules('anonim', 'anonim', 'in_list[1]');
			$this->form_validation->set_rules('bank', 'bank', 'numeric|required');

			$query = $this->db->query(' SELECT *
											FROM tb_donasi
											WHERE id_donasi = "' . $id_donasi . '"');
			if ($query->num_rows() > 0) {
				$result = $query->row_array();
				if ($this->form_validation->run() == false) {
					$main['donasi'] = $query->row_array();

					$main['id_donasi'] = $id_donasi;
					$main['provinsi'] = $this->Donasi->provinsi();
					$main['bank'] = $this->Donasi->bank();
					$this->Admin->view('admin/donasi_edit', $main);
				
				} else {
					if($this->input->post('anonim', TRUE) == NULL || $this->input->post('anonim', TRUE) == ""){
						$anon = '0';
					} else{
						$anon = '1';
					}

					$data = [
						'id_donasi' => $result['id_donasi'],
						'nama' => $this->input->post('name', TRUE),
						'no_hp' => $this->input->post('phone', TRUE),
						'email' => $this->input->post('email', TRUE),
						'provinsi' => $this->input->post('provinsi', TRUE),
						'jumlah_donasi' => $this->input->post('amount', TRUE),
						'bank' => $this->input->post('bank', TRUE),
						'anonim' => $anon,
						'keterangan' => $this->input->post('message', TRUE)
					];
					$this->Admin->updateDonasi($data);
				}
			}else{
				redirect('adminpanel/donasi');
			}
		}else{
			$this->donasi();
		}
	}

	public function donasibaru()
	{
		$main['donasi_baru'] = $this->Admin->donasi_baru();
		$this->Admin->view('admin/donasi_masuk', $main);
	}

	public function tambahonasibaru()
	{
		$this->form_validation->set_rules('name', 'nama lengkap', 'trim|required|xss_clean');
		$this->form_validation->set_rules('phone', 'no. handphone', 'trim|numeric|xss_clean|required');
		$this->form_validation->set_rules('email', 'email', 'trim|xss_clean|valid_email|required');
		$this->form_validation->set_rules('provinsi', 'provinsi', 'numeric|required');
		$this->form_validation->set_rules('amount', 'amount', 'trim|numeric|xss_clean|required');
		$this->form_validation->set_rules('message', 'keterangan', 'trim|xss_clean');
		$this->form_validation->set_rules('anonim', 'anonim', 'in_list[1]');
		$this->form_validation->set_rules('bank', 'bank', 'numeric|required');

		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			if($this->input->post('anonim', TRUE) == NULL || $this->input->post('anonim', TRUE) == ""){
				$anon = '0';
			} else{
				$anon = '1';
			}

			$data = [
				'nama' => $this->input->post('name', TRUE),
				'no_hp' => $this->input->post('phone', TRUE),
				'email' => $this->input->post('email', TRUE),
				'provinsi' => $this->input->post('provinsi', TRUE),
				'jumlah_donasi' => $this->input->post('amount', TRUE),
				'bank' => $this->input->post('bank', TRUE),
				'anonim' => $anon,
				'keterangan' => $this->input->post('message', TRUE)
			];
			$this->Admin->addDonasiBaru($data);
		}
	}

	public function updatedonasibaru($kode = "")
	{
		$this->form_validation->set_rules('status', 'status', 'required|in_list[0,1,2]');

		if (!$kode == "") {

			if ($this->form_validation->run() == false) {
				redirect('adminpanel/donasibaru');
			} else {
				$data = [
					'kode' => $kode,
					'status' => $this->input->post('status', TRUE)
				];
				$this->Admin->updatedonasibaru($data);
			}
		} else {
			redirect('adminpanel/donasibaru');
		}
	}

	public function updatedonasidonatur()
	{
		$this->form_validation->set_rules('donatur', 'jumlah donatur', 'trim|numeric|xss_clean|required');
		$this->form_validation->set_rules('donasi', 'jumlah donasi', 'trim|numeric|xss_clean|required');


		if ($this->form_validation->run() == false) {
			redirect('adminpanel');
		} else {
			$data = [
				'donatur' => $this->input->post('donatur', TRUE),
				'donasi' => $this->input->post('donasi', TRUE)
			];
			$this->Admin->updatedonasidonatur($data);
		}
	}

	// ##########################
	// BLOG

	public function blog() 
	{
		$main['blog'] = $this->Blog->get_blog();
		$this->Admin->view('admin/blog/all', $main);
	}
	
	public function editblog($slug) 
	{
		$query = $this->db->query(' SELECT *
											FROM tb_blog
											WHERE slug = "' . $slug . '"');
		if ($query->num_rows() > 0) {
			$result = $query->row_array();
			$main['blog'] = $this->Blog->get_blog();
			$this->Admin->view('admin/blog/blog_edit', $main);
		}
	}

	public function tambahblog() 
	{
		$this->form_validation->set_rules('judul', 'judul', 'trim|xss_clean|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|xss_clean|required');
		
		if ($this->form_validation->run() == false) {
			$main['kosong'] = "";
			$this->Admin->view('admin/blog/blog_tambah', $main);
		} else {
			$data = [
				'judul' => $this->input->post('judul', TRUE),
				'isi' => $this->input->post('keterangan', TRUE)
			];
			$this->Blog->tambahblog($data);
			
        }
		
	}


	// ##########################

	public function fetch_donasi_baru()
	{
		if ($this->input->post('kode')) {
			echo $this->Admin->fetch_donasi_baru($this->input->post('kode'));
		}
	}

}
