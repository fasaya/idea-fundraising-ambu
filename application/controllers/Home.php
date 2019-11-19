<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Helper_model', 'Helper');
		$this->load->model('Home_model', 'Home');
		$this->load->model('Admin_model', 'Admin');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$main['donasi'] = $this->Admin->donasi();
		$this->Home->view('home/home', $main);
	}

	public function tentang()
	{
		$main['kosong'] = "";
		$this->Home->view('home/about', $main);
	}

	public function visidanmisi()
	{
		$main['kosong'] = "";
		$this->Home->view('home/visidanmisi', $main);
	}

	public function adrt()
	{
		$main['kosong'] = "";
		$this->Home->view('home/adrt', $main);
	}
}
