<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    function view($view, $main)
    {
        $id_user = $this->session->userdata('id_user');
        $query = $this->db->query(' SELECT 
                                            username,
                                            keterangan
                                        FROM tb_login 
                                        WHERE id_user = "' . $id_user . '" ');
        $header['user'] = $query->row_array();

        $this->load->view('admin/v_header', $header);
        $this->load->view($view, $main);
        $this->load->view('admin/v_footer');
    }

    function cek_login()
    {
        $id_user = $this->session->userdata('id_user');
        $log_stat = $this->session->userdata('log_stat');
        $ket = $this->session->userdata('keterangan');

        if (empty($id_user) || $id_user == "" || $log_stat != TRUE || $ket != 'admin') {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sesi Anda tidak valid. Mohon melakukan login terlebih dahulu!</div>');
            redirect('webadmin');
        }
    }

    // ###############################

    function donasi_baru()
    {
        $this->db->select("*");
        $this->db->from("tb_donasi_baru");
        $this->db->order_by("date", "DESC");
        return $this->db->get()->result();
    }
} //end model
