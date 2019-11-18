<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminpanel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Helper_model', 'Helper');
		$this->load->model('Admin_model', 'Admin');
		$this->Admin->cek_login();
	}

	public function index()
	{
		$main['kosong'] = "";
		$this->Admin->view('admin/dashboard', $main);
	}

	public function donasibaru()
	{
		$main['donasi_baru'] = $this->Admin->donasi_baru();
		$this->Admin->view('admin/donasi_masuk', $main);
	}

	public function donasi()
	{
		$main['kosong'] = "";
		$this->Admin->view('admin/donasi_konfirmasi', $main);
	}
}
