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
		$this->load->model('Bank_model', 'Bank');
		$this->load->model('Blog_model', 'Blog');
		$this->load->model('Home_model', 'Home');
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
		if ($id_donasi != "") {

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
					if ($this->input->post('anonim', TRUE) == NULL || $this->input->post('anonim', TRUE) == "") {
						$anon = '0';
					} else {
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
			} else {
				redirect('adminpanel/donasi');
			}
		} else {
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
			if ($this->input->post('anonim', TRUE) == NULL || $this->input->post('anonim', TRUE) == "") {
				$anon = '0';
			} else {
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

	public function editblog($id_blog = "")
	{
		$query = $this->db->query(' SELECT *
											FROM tb_blog
											WHERE id_blog = "' . $id_blog . '" AND is_deleted = "0"');
		if ($query->num_rows() > 0 && $id_blog != "") {
			$this->form_validation->set_rules('judul', 'judul', 'trim|xss_clean|required');
			$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|xss_clean|required');

			if ($this->form_validation->run() == false) {

				$main['blog'] = $query->row_array();
				$this->Admin->view('admin/blog/blog_edit', $main);
			} else {
				$result = $query->row_array();
				$data = [
					'id_blog' => $result['id_blog'],
					'foto_lama' => $result['img'],
					'judul' => $this->input->post('judul', TRUE),
					'keterangan' => $this->input->post('keterangan', TRUE)
				];
				$this->Blog->editBlog($data);
			}
		} else {
			$this->blog();
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

	public function hapusblog($id_blog = "")
	{
		$this->Blog->hapusBlog($id_blog);
	}

	// ##########################
	// HOME

	public function halamanhome($tipe = "")
	{
		if ($tipe == "1" || $tipe == "2" || $tipe == "") {
			$this->form_validation->set_rules('judul1', 'judul', 'trim|xss_clean|required');
			$this->form_validation->set_rules('judul2', 'lanjutan judul', 'trim|xss_clean|required');
			$this->form_validation->set_rules('keterangan1', 'keterangan', 'trim|xss_clean|required');
			$this->form_validation->set_rules('keterangan2', 'keterangan', 'trim|xss_clean|required');

			if ($this->form_validation->run() == false) {
				$main['kosong'] = "";
				$this->Admin->view('admin/pages/home', $main);
			} else {
				$data = [
					'judul1' => $this->input->post('judul1', TRUE),
					'judul2' => $this->input->post('judul2', TRUE),
					'isi1' => $this->input->post('keterangan1', TRUE),
					'isi2' => $this->input->post('keterangan2', TRUE)
				];
				if ($tipe == "1") {
					$data['tipe'] = "1";
					$this->Admin->updateHome($data);
				} elseif ($tipe == "2") {
					$data['tipe'] = "2";
					$this->Admin->updateHome($data);
				} else {
					$this->halamanhome();
				}
			}
		} elseif ($tipe == "3a" || $tipe == "3b" || $tipe == "3c" || $tipe == "3d" || $tipe == "3e") {
			$this->Admin->updateHomeGambar($tipe);
		} else {
			$this->halamanhome();
		}
	}

	// ##########################
	// TENTANG

	public function halamantentang($tipe = "")
	{
		$this->form_validation->set_rules('title1', 'title', 'trim|xss_clean|required');
		$this->form_validation->set_rules('title2', 'sub title', 'trim|xss_clean');
		$this->form_validation->set_rules('judul1', 'judul', 'trim|xss_clean');
		$this->form_validation->set_rules('judul2', 'judul bold', 'trim|xss_clean');
		$this->form_validation->set_rules('keterangan1', 'keterangan', 'trim|xss_clean|required');
		$this->form_validation->set_rules('keterangan2', 'sub keterangan', 'trim|xss_clean|required');

		if ($this->form_validation->run() == false) {
			$main['kosong'] = "";
			$this->Admin->view('admin/pages/tentang', $main);
		} else {
			$data = [
				'title1' => $this->input->post('title1', TRUE),
				'title2' => $this->input->post('title2', TRUE),
				'judul1' => $this->input->post('judul1', TRUE),
				'judul2' => $this->input->post('judul2', TRUE),
				'isi1' => $this->input->post('keterangan1', TRUE),
				'isi2' => $this->input->post('keterangan2', TRUE)
			];
			$this->Admin->updateTentang($data);
		}
	}

	// ##########################
	// ADRT

	public function halamanadrt()
	{
		$main['kosong'] = "";
		$this->Admin->view('admin/pages/adrt', $main);
	}

	// ##########################
	// MOTTO

	public function motto()
	{
		$this->form_validation->set_rules('isi1', 'motto 1', 'trim|required|xss_clean');
		$this->form_validation->set_rules('isi2', 'motto 2', 'trim|xss_clean');
		$this->form_validation->set_rules('isi3', 'motto 3', 'trim|xss_clean');
		$this->form_validation->set_rules('isi4', 'motto 4', 'trim|xss_clean');
		$this->form_validation->set_rules('isi5', 'motto 5', 'trim|xss_clean');
		$this->form_validation->set_rules('sub', 'keterangan', 'trim|required|xss_clean');

		if ($this->form_validation->run() == false) {
			$main['kosong'] = "";
			$this->Admin->view('admin/motto', $main);
		} else {
			$data = [
				'isi1' => $this->input->post('isi1', TRUE),
				'isi2' => $this->input->post('isi2', TRUE),
				'isi3' => $this->input->post('isi3', TRUE),
				'isi4' => $this->input->post('isi4', TRUE),
				'isi5' => $this->input->post('isi5', TRUE),
				'sub' => $this->input->post('sub', TRUE)
			];
			$this->Admin->updateMotto($data);
		}
	}

	// ##########################
	// lainnya

	public function lainnya($tipe = "")
	{
		if ($tipe == "a") {
			$this->Admin->updateLainnyaGambarHeader();
		} else {
			$main['kosong'] = "";
			$this->Admin->view('admin/lainnya', $main);
		}
	}

	// ##########################
	// VISI MISI

	public function halamanvisimisi($tipe = "")
	{
		if ($tipe == "1") {

			$this->form_validation->set_rules('title1', 'title', 'trim|xss_clean|required');
			$this->form_validation->set_rules('title2', 'sub title', 'trim|xss_clean');
			$this->form_validation->set_rules('visi', 'visi', 'trim|xss_clean|required');
			$this->form_validation->set_rules('misi', 'misi', 'trim|xss_clean|required');
			$this->form_validation->set_rules('quote1', 'kutipan', 'trim|xss_clean|required');
			$this->form_validation->set_rules('quote2', 'pengutip', 'trim|xss_clean|required');


			if ($this->form_validation->run() == false) {
				$main['kosong'] = "";
				$this->Admin->view('admin/pages/visidanmisi', $main);
			} else {
				$data = [
					'title1' => $this->input->post('title1', TRUE),
					'title2' => $this->input->post('title2', TRUE),
					'visi' => $this->input->post('visi', TRUE),
					'misi' => $this->input->post('misi', TRUE),
					'quote1' => $this->input->post('quote1', TRUE),
					'quote2' => $this->input->post('quote2', TRUE)
				];
				$this->Admin->updateVisimisi($data);
			}
		} elseif ($tipe == "2a" || $tipe == "2b" || $tipe == "2c" || $tipe == "2d") {
			$this->Admin->updateVisimisiGambar($tipe);
		} else {
			$main['kosong'] = "";
			$this->Admin->view('admin/pages/visidanmisi', $main);
		}
	}

	// ##########################
	// STRUKTUR ORGANISASI

	public function strukturorg()
	{
		$main['kosong'] = "";
		$this->Admin->view('admin/struktur_org', $main);
	}


	// ##########################
	// BANK

	public function bank()
	{
		$main['bank'] = $this->Home->bank();
		$this->Admin->view('admin/bank/bank_all', $main);
	}

	public function hapusbank($id_bank = "")
	{
		$this->Bank->hapusBank($id_bank);
	}

	public function tambahbank()
	{

		$this->form_validation->set_rules('bank', 'bank', 'trim|xss_clean|required');
		$this->form_validation->set_rules('atas_nama', 'atas nama', 'trim|xss_clean|required');
		$this->form_validation->set_rules('no_rekening', 'no rekening', 'trim|numeric|xss_clean|required');

		if ($this->form_validation->run() == false) {
			$main['kosong'] = "";
			$this->Admin->view('admin/bank/bank_tambah', $main);
		} else {
			$data = [
				'bank' => $this->input->post('bank', TRUE),
				'atas_nama' => $this->input->post('atas_nama', TRUE),
				'no_rekening' => $this->input->post('no_rekening', TRUE)
			];
			$this->Bank->tambahBank($data);
		}
	}
	public function editbank($id_bank = "")
	{
		$query = $this->db->query(' SELECT *
											FROM bank
											WHERE id_bank = "' . $id_bank . '"');
		if ($query->num_rows() > 0 && $id_bank != "") {
			$this->form_validation->set_rules('bank', 'bank', 'trim|xss_clean|required');
			$this->form_validation->set_rules('atas_nama', 'atas nama', 'trim|xss_clean|required');
			$this->form_validation->set_rules('no_rekening', 'no rekening', 'trim|numeric|xss_clean|required');

			if ($this->form_validation->run() == false) {

				$main['bank'] = $query->row_array();
				$this->Admin->view('admin/bank/bank_edit', $main);
			} else {
				$result = $query->row_array();
				$data = [
					'foto_lama' => $result['img'],
					'id_bank' => $result['id_bank'],
					'bank' => $this->input->post('bank', TRUE),
					'atas_nama' => $this->input->post('atas_nama', TRUE),
					'no_rekening' => $this->input->post('no_rekening', TRUE)
				];
				$this->Bank->editBank($data);
			}
		} else {
			$this->bank();
		}
	}

	// ##########################
	// KONTAK

	public function kontak()
	{
		$this->form_validation->set_rules('nowa', 'no. whatsapp', 'trim|numeric|xss_clean|required');
		$this->form_validation->set_rules('nohp', 'no. handphone', 'trim|numeric|xss_clean|required');
		$this->form_validation->set_rules('email', 'email', 'trim|valid_email|xss_clean|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|xss_clean|required');

		if ($this->form_validation->run() == false) {
			$main['kosong'] = "";
			$this->Admin->view('admin/kontak', $main);
		} else {
			$data = [
				'nowa' => $this->input->post('nowa', TRUE),
				'nohp' => $this->input->post('nohp', TRUE),
				'email' => $this->input->post('email', TRUE),
				'alamat' => $this->input->post('alamat', TRUE)
			];
			$this->Admin->editKontak($data);
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
