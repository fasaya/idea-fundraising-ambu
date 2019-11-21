<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bank_model extends CI_Model
{

    function tambahBank($data)
    {
        $fileName = $_FILES['gambar']['name'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $fileNameNew = "bank_" . uniqid('', true) . "." . $fileActualExt;

        // Set preference 
        $config['upload_path'] = './template/images/bank';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '1024'; // max_size in kb (1 mb = 1024 kb)
        $config['file_name'] = $fileNameNew;

        // Load upload library 
        $this->load->library('upload', $config);

        // File upload
        if ($this->upload->do_upload('gambar')) {

            //upload
            $uploadData = $this->upload->data();

            // Get data about the file
            $filename = $uploadData['file_name'];

            //Start database transaction
            $this->db->trans_start();

            //insert into table member
            $data_u = [
                'img' => $filename,
                'bank' => $data['bank'],
                'atas_nama' => $data['atas_nama'],
                'no_rekening' => $data['no_rekening'],
                'is_deleted' => "0"
            ];
            $this->db->insert('bank', $data_u);

            //Start database transaction
            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Gagal menambahkan bank!
                        </div>'
                );
                redirect('adminpanel/bank');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Berhasil menambahkan bank baru!
                        </div>'
                );
                redirect('adminpanel/bank');
            }
        } else {

            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        ' . $error['error'] . '
                        </div>'
            );
            redirect('adminpanel/bank');
        }
    }

    function editBank($data)
    {
        if ($_FILES['gambar']['name'] != NULL) {

            $fileName = $_FILES['gambar']['name'];
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $fileNameNew = "bank_" . uniqid('', true) . "." . $fileActualExt;

            // Set preference 
            $config['upload_path'] = './template/images/bank';
            $config['allowed_types'] = 'png|jpg|jpeg';
            $config['max_size'] = '1024'; // max_size in kb (1 mb = 1024 kb)
            $config['file_name'] = $fileNameNew;

            // Load upload library 
            $this->load->library('upload', $config);

            // File upload
            if ($this->upload->do_upload('gambar')) {

                $path = "./template/images/bank/" . $data["foto_lama"];
                if (!unlink($path)) {
                    // echo "Error hapus gambar.";
                }

                //upload
                $uploadData = $this->upload->data();

                // Get data about the file
                $filename = $uploadData['file_name'];

                //Start database transaction
                $this->db->trans_start();

                //insert into table member
                $data_update = [
                    'img' => $filename,
                    'bank' => $data['bank'],
                    'atas_nama' => $data['atas_nama'],
                    'no_rekening' => $data['no_rekening']
                ];
                $this->db->update('bank', $data_update, "id_bank = '" . $data['id_bank'] . "'");

                //Start database transaction
                $this->db->trans_complete();

                if ($this->db->trans_status() === FALSE) {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Gagal update bank!
                        </div>'
                    );
                    redirect('adminpanel/editbank/' . $data['id_bank']);
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Berhasil upload bank!
                        </div>'
                    );
                    redirect('adminpanel/bank');
                }
            } else {

                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        ' . $error['error'] . '
                        </div>'
                );
                redirect('adminpanel/editbank/' . $data['id_bank']);
            }
        } else {
            //Start database transaction
            $this->db->trans_start();

            //insert into table member
            $data_update = [
                'bank' => $data['bank'],
                'atas_nama' => $data['atas_nama'],
                'no_rekening' => $data['no_rekening']
            ];
            $this->db->update('bank', $data_update, "id_bank = '" . $data['id_bank'] . "'");

            //Start database transaction
            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    Gagal update bank!
                    </div>'
                );
                redirect('adminpanel/editbank/' . $data['id_bank']);
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    Berhasil update bank!
                    </div>'
                );
                redirect('adminpanel/bank');
            }
        }
    }

    function hapusBank($id_bank)
    {

        //Start database transaction
        $this->db->trans_start();

        //insert into table member
        $data_update = [
            'is_deleted' => "1"
        ];
        $this->db->update('bank', $data_update, "id_bank = '" . $id_bank . "'");

        //Start database transaction
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Gagal hapus bank!
                        </div>'
            );
            redirect('adminpanel/bank');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Berhasil hapus bank!
                        </div>'
            );
            redirect('adminpanel/bank');
        }
    }
} //end model
