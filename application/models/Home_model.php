<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    function view($view, $main)
    {
        $header['kosong'] = "";

        $footer['bank'] = $this->bank();

        $this->load->view('home/v_header', $header);
        $this->load->view($view, $main);
        $this->load->view('home/v_footer', $footer);
    }

    function viewdonasi($view, $main)
    {
        $header['kosong'] = "";
        $footer['bank'] = $this->bank();

        $this->load->view('home/v_header', $header);
        $this->load->view('home/donasi/donasi_header');
        $this->load->view($view, $main);
        $this->load->view('home/donasi/donasi_footer', $main);
        $this->load->view('home/v_footer', $footer);
    }

    function bank()
    {
        $this->db->select("*");
        $this->db->from("bank");
        $this->db->order_by("bank", "ASC");
        return $this->db->get()->result();
    }
} //end model
