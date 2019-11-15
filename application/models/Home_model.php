<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    function view($view, $main)
    {
        $header['kosong'] = "";

        $this->load->view('home/v_header', $header);
        $this->load->view($view, $main);
        $this->load->view('home/v_footer');
    }
} //end model
