<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Helper_model extends CI_Model
{


    function status_donasi($status)
    {
        if ($status == "1") {
            return '<span class="badge badge-primary">Sudah dikonfirmasi</span>';
        } else {
            return '<span class="badge badge-success">Baru</span>';
        }
    }

    function nama_bank($id)
    {
        $query = $this->db->query(' SELECT bank
                                    FROM bank 
                                    WHERE id_bank = "' . $id . '" ');
        $result = $query->row_array();
        return $result['bank'];
    }

    function nama_provinsi($id)
    {
        $query = $this->db->query(' SELECT name
                                    FROM provinsi 
                                    WHERE id = "' . $id . '" ');
        $result = $query->row_array();
        return $result['name'];
    }
} //end model
