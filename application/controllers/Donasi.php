<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Helper_model', 'Helper');
		$this->load->model('Home_model', 'Home');
		$this->load->model('Donasi_model', 'Donasi');
		$this->load->library('form_validation');
	}

	public function index()
	{
		redirect('donasi/infodonatur');
	}

	public function infodonatur()
	{
		$this->form_validation->set_rules('name', 'nama lengkap', 'trim|required|xss_clean');
		$this->form_validation->set_rules('phone', 'no. handphone', 'trim|numeric|xss_clean|required');
		$this->form_validation->set_rules('email', 'email', 'trim|xss_clean|valid_email|required');
		$this->form_validation->set_rules('provinsi', 'provinsi', 'trim|xss_clean|required');
		$this->form_validation->set_rules('amount', 'amount', 'trim|numeric|xss_clean|required');
		// $this->form_validation->set_rules('amount', 'amount', 'trim|xss_clean');

		if ($this->form_validation->run() == false) {
			$main['provinsi'] = $this->Donasi->provinsi();
			$this->Home->viewdonasi('home/donasi/donasi1', $main);
		} else {
			$data = [
				'nama' => $this->input->post('name', TRUE),
				'no_hp' => $this->input->post('phone', TRUE),
				'email' => $this->input->post('email', TRUE),
				'provinsi' => $this->input->post('provinsi', TRUE),
				'jumlah_donasi' => $this->input->post('amount', TRUE)
			];
			$this->Donasi->addDonasiBaru($data);
		}
	}

	public function summary($kode_donasi_baru = "")
	{
		$this->form_validation->set_rules('bank', 'bank', 'trim|numeric|xss_clean|required');
		if (!$kode_donasi_baru == "") {

			$query = $this->db->query(' SELECT *
									FROM tb_donasi_baru 
									WHERE kode = "' . $kode_donasi_baru . '" AND bank = ""');
			if ($query->num_rows() > 0) {
				if ($this->form_validation->run() == false) {
					$main['data_donasi'] = $query->row_array();
					$main['bank'] = $this->Donasi->bank();
					$main['kode'] = $kode_donasi_baru;
					$this->Home->viewdonasi('home/donasi/donasi2', $main);
				} else {
					$data = [
						'kode' => $kode_donasi_baru,
						'bank' => $this->input->post('bank', TRUE)
					];
					$this->Donasi->updateDonasiBaru($data);
				}
			} else {
				redirect('donasi/infodonatur');
			}
		} else {
			redirect('donasi/infodonatur');
		}
	}

	public function selesai($kode_donasi_baru = "")
	{
		if (!$kode_donasi_baru == "") {

			$query = $this->db->query(' SELECT jumlah_donasi
									FROM tb_donasi_baru 
									WHERE kode = "' . $kode_donasi_baru . '"');
			if ($query->num_rows() > 0) {
				$main['data_donasi'] = $query->row_array();
				$main['kode'] = $kode_donasi_baru;
				$this->Home->viewdonasi('home/donasi/donasi3', $main);
			} else {
				redirect('donasi/infodonatur');
			}
		} else {
			redirect('donasi/infodonatur');
		}
	}
}
