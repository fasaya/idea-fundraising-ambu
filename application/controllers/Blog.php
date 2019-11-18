<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Helper_model', 'Helper');
		$this->load->model('Home_model', 'Home');
	}

	public function index()
	{
		$main['kosong'] = "";
		$this->Home->view('home/blog/all', $main);
	}
}
