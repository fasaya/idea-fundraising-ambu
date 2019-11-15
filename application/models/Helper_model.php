<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Helper_model extends CI_Model
{
    function view($view, $main)
    {
        $header['kosong'] = "";

        $this->load->view('v_header', $header);
        $this->load->view($view, $main);
        $this->load->view('v_footer');
    }
} //end model
