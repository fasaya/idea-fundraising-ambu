<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Helper_model', 'Helper');
		$this->load->model('Home_model', 'Home');
		$this->load->model('Blog_model', 'Blog');
	}

	public function index()
	{
		$main['blog'] = $this->Blog->get_blog();
		$this->Home->view('home/blog/all', $main);
	}

	public function read($slug="")
	{
		if ($slug != ""){
			$query = $this->db->query(' SELECT *
											FROM tb_blog
											WHERE slug = "' . $slug . '"');
			if ($query->num_rows() > 0) {
				$main['blog'] = $query->row_array();
				$this->Home->view('home/blog/read_more', $main);
			}else{
				redirect('blog');
			}
		}
	}
}
