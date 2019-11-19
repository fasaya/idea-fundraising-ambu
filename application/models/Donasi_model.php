<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi_model extends CI_Model
{
    function provinsi()
    {
        $this->db->select("id, name");
        $this->db->from("provinsi");
        $this->db->order_by("name", "ASC");
        return $this->db->get()->result();
    }

    function bank()
    {
        $this->db->select("*");
        $this->db->from("bank");
        $this->db->order_by("bank", "ASC");
        return $this->db->get()->result();
    }


    // ######################################################################################

    public function addDonasiBaru($data)
    {

        //Start database transaction
        $this->db->trans_start();

        $code = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6); //6 adalah panjang karakter

        //insert
        $data_donasi = [
            'nama' => $data['nama'],
            'kode' => $code,
            'no_hp' => $data['no_hp'],
            'email' => $data['email'],
            'provinsi' => $data['provinsi'],
            'jumlah_donasi' => $data['jumlah_donasi'],
            'date' => new_date(),
            'bank' => "",
            'anonim' => "0",
            'status' => "0"
        ];
        $this->db->insert('tb_donasi_baru', $data_donasi);

        //Start database transaction
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Error!
                </div>'
            );
            redirect('donasi/infodonatur');
        } else {
            redirect('donasi/summary/' . $code);
        }
    }


    public function updateDonasiBaru($data)
    {

        //Start database transaction
        $this->db->trans_start();

        $this->db->update('tb_donasi_baru', ['bank' => $data['bank']], "kode = '" . $data['kode'] . "'");

        //Start database transaction
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Error!
                </div>'
            );
            redirect('donasi/infodonatur');
        } else {
            redirect('donasi/selesai/' . $data['kode']);
        }
    }
} //end model
