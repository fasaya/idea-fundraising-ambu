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

    function donasi()
    {
        $this->db->select("*");
        $this->db->from("tb_donasi");
        $this->db->order_by("date", "DESC");
        return $this->db->get()->result();
    }

    // ##########################
    // ADD
    public function addDonasiBaru($data)
    {

        //Start database transaction
        $this->db->trans_start();

        //insert
        $data_donasi = [
            'nama' => $data['nama'],
            'no_hp' => $data['no_hp'],
            'email' => $data['email'],
            'provinsi' => $data['provinsi'],
            'jumlah_donasi' => $data['jumlah_donasi'],
            'date' => new_date(),
            'bank' => $data['bank'],
            'anonim' => $data['anonim'],
            'keterangan' => $data['keterangan']
        ];
        $this->db->insert('tb_donasi', $data_donasi);

        //Start database transaction
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->session->set_flashdata(
                'message_add_donatur',
                '<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Error!
                </div>'
            );
            redirect('adminpanel/donasi');
        } else {
            $this->session->set_flashdata(
                'message_add_donatur',
                '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Berhasil tambah data donasi!
                </div>'
            );
            redirect('adminpanel');
        }
    }

    //update donasi
    public function updateDonasi($data)
    {

        //Start database transaction
        $this->db->trans_start();

        //insert
        $data_donasi = [
            'nama' => $data['nama'],
            'no_hp' => $data['no_hp'],
            'email' => $data['email'],
            'provinsi' => $data['provinsi'],
            'jumlah_donasi' => $data['jumlah_donasi'],
            'bank' => $data['bank'],
            'anonim' => $data['anonim'],
            'keterangan' => $data['keterangan']
        ];
        $this->db->update('tb_donasi', $data_donasi, "id_donasi = '" . $data['id_donasi'] . "'");

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
            redirect('adminpanel/editdonasi/' . $data['id_donasi']);
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Berhasil update data donasi!
                </div>'
            );
            redirect('adminpanel/editdonasi/' . $data['id_donasi']);
        }
    }


    // Update

    public function updatedonasidonatur($data)
    {
        //Start database transaction
        $this->db->trans_start();

        $this->db->update('tb_setting', ['nilai' => $data['donasi']], "kode = 'DONASI'");
        $this->db->update('tb_setting', ['nilai' => $data['donatur']], "kode = 'DONATUR'");

        //Start database transaction
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->session->set_flashdata(
                'message_donasi_donatur',
                '<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Error!
                </div>'
            );
            redirect('adminpanel');
        } else {
            $this->session->set_flashdata(
                'message_donasi_donatur',
                '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Berhasil update Jumlah Donatur dan Donasi.
                </div>'
            );
            redirect('adminpanel');
        }
    }

    public function updatedonasibaru($data)
    {

        //Start database transaction
        $this->db->trans_start();

        $this->db->update('tb_donasi_baru', ['status' => $data['status']], "kode = '" . $data['kode'] . "'");

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
            redirect('adminpanel/donasibaru');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Berhasil update donasi ' . $data['kode'] . '.
                </div>'
            );
            redirect('adminpanel/donasibaru');
        }
    }

    // Update kontak

    public function editKontak($data)
    {
        //Start database transaction
        $this->db->trans_start();

        $this->db->update('tb_setting', ['nilai' => $data['nowa']], "kode = 'NOWA'");
        $this->db->update('tb_setting', ['nilai' => $data['nohp']], "kode = 'NOHP'");
        $this->db->update('tb_setting', ['nilai' => $data['email']], "kode = 'EMAIL'");
        $this->db->update('tb_setting', ['nilai' => $data['alamat']], "kode = 'ALAMAT'");

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
            redirect('adminpanel/kontak');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Berhasil update Kontak.
                </div>'
            );
            redirect('adminpanel/kontak');
        }
    }

    // Update halaman HOME

    public function updateHome($data)
    {

        $tipe = $data['tipe'];

        if ($tipe == "1" || $tipe == "2") {

            //Start database transaction
            $this->db->trans_start();

            if ($_FILES['gambar']['name'] != NULL) {

                $fileName = $_FILES['gambar']['name'];
                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));
                $fileNameNew = "isi_" . uniqid('', true) . "." . $fileActualExt;

                // Set preference 
                $config['upload_path'] = './template/images/isi';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '1024'; // max_size in kb (1 mb = 1024 kb)
                $config['file_name'] = $fileNameNew;

                // Load upload library 
                $this->load->library('upload', $config);

                // File upload
                if ($this->upload->do_upload('gambar')) {
                    $fotolama = $this->Helper->isi_web('home_' . $tipe . '_img');
                    $path = "./template/images/isi/" . $fotolama;
                    if (!unlink($path)) {
                        // echo "Error hapus gambar.";
                    }

                    //upload
                    $uploadData = $this->upload->data();

                    // Get data about the file
                    $filename = $uploadData['file_name'];

                    //insert into table
                    if ($tipe == "1") {
                        $this->db->update('isi_web', ['isi' => $filename], "kode = 'home_1_img'");
                        $this->db->update('isi_web', ['isi' => $data['judul1']], "kode = 'home_1_judul1'");
                        $this->db->update('isi_web', ['isi' => $data['judul2']], "kode = 'home_1_judul2'");
                        $this->db->update('isi_web', ['isi' => $data['isi1']], "kode = 'home_1_isi1'");
                        $this->db->update('isi_web', ['isi' => $data['isi2']], "kode = 'home_1_isi2'");
                    } elseif ($tipe == "2") {
                        $this->db->update('isi_web', ['isi' => $filename], "kode = 'home_2_img'");
                        $this->db->update('isi_web', ['isi' => $data['judul1']], "kode = 'home_2_judul1'");
                        $this->db->update('isi_web', ['isi' => $data['judul2']], "kode = 'home_2_judul2'");
                        $this->db->update('isi_web', ['isi' => $data['isi1']], "kode = 'home_2_isi1'");
                        $this->db->update('isi_web', ['isi' => $data['isi2']], "kode = 'home_2_isi2'");
                    }


                    //Start database transaction
                    $this->db->trans_complete();

                    if ($this->db->trans_status() === FALSE) {
                        $this->session->set_flashdata(
                            'message_' . $tipe,
                            '<div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Gagal!
                            </div>'
                        );
                        redirect('adminpanel/halamanhome');
                    } else {
                        $this->session->set_flashdata(
                            'message_' . $tipe,
                            '<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Berhasil update!
                            </div>'
                        );
                        redirect('adminpanel/halamanhome');
                    }
                } else {

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata(
                        'message_' . $tipe,
                        '<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        ' . $error['error'] . '
                        </div>'
                    );
                    redirect('adminpanel/halamanhome');
                }
            } else {
                //insert into table
                if ($tipe == "1") {
                    $this->db->update('isi_web', ['isi' => $data['judul1']], "kode = 'home_1_judul1'");
                    $this->db->update('isi_web', ['isi' => $data['judul2']], "kode = 'home_1_judul2'");
                    $this->db->update('isi_web', ['isi' => $data['isi1']], "kode = 'home_1_isi1'");
                    $this->db->update('isi_web', ['isi' => $data['isi2']], "kode = 'home_1_isi2'");
                } elseif ($tipe == "2") {
                    $this->db->update('isi_web', ['isi' => $data['judul1']], "kode = 'home_2_judul1'");
                    $this->db->update('isi_web', ['isi' => $data['judul2']], "kode = 'home_2_judul2'");
                    $this->db->update('isi_web', ['isi' => $data['isi1']], "kode = 'home_2_isi1'");
                    $this->db->update('isi_web', ['isi' => $data['isi2']], "kode = 'home_2_isi2'");
                }

                //Start database transaction
                $this->db->trans_complete();

                if ($this->db->trans_status() === FALSE) {
                    $this->session->set_flashdata(
                        'message_' . $tipe,
                        '<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Gagal!
                        </div>'
                    );
                    redirect('adminpanel/halamanhome');
                } else {
                    $this->session->set_flashdata(
                        'message_' . $tipe,
                        '<div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Berhasil update!
                        </div>'
                    );
                    redirect('adminpanel/halamanhome');
                }
            }
        }
    }

    public function updateHomeGambar($tipe)
    {

        //Start database transaction
        $this->db->trans_start();

        $fileName = $_FILES['gambar']['name'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $fileNameNew = "isi_" . uniqid('', true) . "." . $fileActualExt;

        // Set preference 
        $config['upload_path'] = './template/images/isi';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '1024'; // max_size in kb (1 mb = 1024 kb)
        $config['file_name'] = $fileNameNew;

        // Load upload library 
        $this->load->library('upload', $config);

        // File upload
        if ($this->upload->do_upload('gambar')) {
            $fotolama = $this->Helper->isi_web('home_3_gbr' . $tipe);
            $path = "./template/images/isi/" . $fotolama;
            if (!unlink($path)) {
                // echo "Error hapus gambar.";
            }

            //upload
            $uploadData = $this->upload->data();

            // Get data about the file
            $filename = $uploadData['file_name'];

            //insert into table

            $this->db->update('isi_web', ['isi' => $filename], "kode = 'home_3_gbr" . $tipe . "'");

            //Start database transaction
            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                $this->session->set_flashdata(
                    'message_3',
                    '<div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Gagal menambahkan!
                            </div>'
                );
                redirect('adminpanel/halamanhome');
            } else {
                $this->session->set_flashdata(
                    'message_3',
                    '<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Berhasil update!
                            </div>'
                );
                redirect('adminpanel/halamanhome');
            }
        } else {

            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata(
                'message_3',
                '<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        ' . $error['error'] . '
                        </div>'
            );
            redirect('adminpanel/halamanhome');
        }
    }

    public function updateVisimisiGambar($tipe)
    {

        //Start database transaction
        $this->db->trans_start();

        $fileName = $_FILES['gambar']['name'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $fileNameNew = "isi_" . uniqid('', true) . "." . $fileActualExt;

        // Set preference 
        $config['upload_path'] = './template/images/isi';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '1024'; // max_size in kb (1 mb = 1024 kb)
        $config['file_name'] = $fileNameNew;

        // Load upload library 
        $this->load->library('upload', $config);

        // File upload
        if ($this->upload->do_upload('gambar')) {
            $fotolama = $this->Helper->isi_web('visimisi_2_img' . $tipe);
            $path = "./template/images/isi/" . $fotolama;
            if (!unlink($path)) {
                // echo "Error hapus gambar.";
            }

            //upload
            $uploadData = $this->upload->data();

            // Get data about the file
            $filename = $uploadData['file_name'];

            //insert into table

            $this->db->update('isi_web', ['isi' => $filename], "kode = 'visimisi_2_img" . $tipe . "'");

            //Start database transaction
            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                $this->session->set_flashdata(
                    'message_2',
                    '<div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Gagal menambahkan!
                            </div>'
                );
                redirect('adminpanel/halamanvisimisi');
            } else {
                $this->session->set_flashdata(
                    'message_2',
                    '<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Berhasil update!
                            </div>'
                );
                redirect('adminpanel/halamanvisimisi');
            }
        } else {

            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata(
                'message_2',
                '<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        ' . $error['error'] . '
                        </div>'
            );
            redirect('adminpanel/halamanvisimisi');
        }
    }

    public function updateLainnyaGambarHeader()
    {

        //Start database transaction
        $this->db->trans_start();

        $fileName = $_FILES['gambar']['name'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $fileNameNew = "isi_" . uniqid('', true) . "." . $fileActualExt;

        // Set preference 
        $config['upload_path'] = './template/images/isi';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '1024'; // max_size in kb (1 mb = 1024 kb)
        $config['file_name'] = $fileNameNew;

        // Load upload library 
        $this->load->library('upload', $config);

        // File upload
        if ($this->upload->do_upload('gambar')) {
            $fotolama = $this->Helper->isi_web('lain_header');
            $path = "./template/images/isi/" . $fotolama;
            if (!unlink($path)) {
                // echo "Error hapus gambar.";
            }

            //upload
            $uploadData = $this->upload->data();

            // Get data about the file
            $filename = $uploadData['file_name'];

            //insert into table

            $this->db->update('isi_web', ['isi' => $filename], "kode = 'lain_header'");

            //Start database transaction
            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                $this->session->set_flashdata(
                    'message_1',
                    '<div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Gagal menambahkan!
                            </div>'
                );
                redirect('adminpanel/lainnya');
            } else {
                $this->session->set_flashdata(
                    'message_1',
                    '<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Berhasil update!
                            </div>'
                );
                redirect('adminpanel/lainnya');
            }
        } else {

            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata(
                'message_1',
                '<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        ' . $error['error'] . '
                        </div>'
            );
            redirect('adminpanel/lainnya');
        }
    }

    public function updateTentang($data)
    {
        //Start database transaction
        $this->db->trans_start();

        $this->db->update('isi_web', ['isi' => $data['title1']], "kode = 'tentang_1_title1'");
        $this->db->update('isi_web', ['isi' => $data['title2']], "kode = 'tentang_1_title2'");
        $this->db->update('isi_web', ['isi' => $data['judul1']], "kode = 'tentang_1_judul1'");
        $this->db->update('isi_web', ['isi' => $data['judul2']], "kode = 'tentang_1_judul2'");
        $this->db->update('isi_web', ['isi' => $data['isi1']], "kode = 'tentang_1_isi1'");
        $this->db->update('isi_web', ['isi' => $data['isi2']], "kode = 'tentang_1_isi2'");

        //Start database transaction
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->session->set_flashdata(
                'message_1',
                '<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Gagal!
                </div>'
            );
            redirect('adminpanel/halamantentang');
        } else {
            $this->session->set_flashdata(
                'message_1',
                '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Berhasil update!
                </div>'
            );
            redirect('adminpanel/halamantentang');
        }
    }

    public function updateMotto($data)
    {
        //Start database transaction
        $this->db->trans_start();

        $this->db->update('isi_web', ['isi' => $data['isi1']], "kode = 'motto_1_a'");
        $this->db->update('isi_web', ['isi' => $data['isi2']], "kode = 'motto_1_b'");
        $this->db->update('isi_web', ['isi' => $data['isi3']], "kode = 'motto_1_c'");
        $this->db->update('isi_web', ['isi' => $data['isi4']], "kode = 'motto_1_d'");
        $this->db->update('isi_web', ['isi' => $data['isi5']], "kode = 'motto_1_e'");
        $this->db->update('isi_web', ['isi' => $data['sub']], "kode = 'motto_1_sub'");

        //Start database transaction
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->session->set_flashdata(
                'message_1',
                '<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Gagal!
                </div>'
            );
            redirect('adminpanel/motto');
        } else {
            $this->session->set_flashdata(
                'message_1',
                '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Berhasil update!
                </div>'
            );
            redirect('adminpanel/motto');
        }
    }

    public function updateVisimisi($data)
    {
        //Start database transaction
        $this->db->trans_start();

        $this->db->update('isi_web', ['isi' => $data['title1']], "kode = 'visimisi_1_title1'");
        $this->db->update('isi_web', ['isi' => $data['title2']], "kode = 'visimisi_1_title2'");
        $this->db->update('isi_web', ['isi' => $data['visi']], "kode = 'visimisi_1_visi'");
        $this->db->update('isi_web', ['isi' => $data['misi']], "kode = 'visimisi_1_misi'");
        $this->db->update('isi_web', ['isi' => $data['quote1']], "kode = 'visimisi_1_quotes1'");
        $this->db->update('isi_web', ['isi' => $data['quote2']], "kode = 'visimisi_1_quotes2'");

        //Start database transaction
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->session->set_flashdata(
                'message_1',
                '<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Gagal!
                </div>'
            );
            redirect('adminpanel/halamanvisimisi');
        } else {
            $this->session->set_flashdata(
                'message_1',
                '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Berhasil update!
                </div>'
            );
            redirect('adminpanel/halamanvisimisi');
        }
    }

    // ############################

    function fetch_donasi($id_donasi)
    {
        // cek if package exists
        $query = $this->db->query(" SELECT jumlah_donasi, anonim, nama
                                    FROM tb_donasi
                                    WHERE id_donasi = '" . $id_donasi . "'");
        if ($query->num_rows() > 0) {
            $result = $query->row_array();

            $amount = $result['jumlah_donasi'];
            $anonim = $result['anonim'];
            $nama = $result['nama'];

            if ($anonim == '1') {
                $stat['anon'] = "selected";
                $stat['nonanon'] = "";
            } else {
                $stat['anon'] = "";
                $stat['nonanon'] = "selected";
            }

            $output = '
                <header class="card-header">
                    <h2 class="card-title">Detail Donasi</h2>
                </header>
                <div class="card-body">
                    <form class="form-horizontal form-bordered" action="' . site_url() . 'adminpanel/updatedonasi/' . $id_donasi . '" method="post">
                        <h4 class="text-left pb-0 mt-3">Info Donasi</h4>
                        <table class="table table-responsive-md table-striped table-bordered mb-5">
                            <tbody>
                                <tr>
                                    <td>Donatur</td>
                                    <td>' . $nama . '</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Donasi</td>
                                    <td>Rp ' . rupiah($amount) . '</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <select name="Anonim" class="form-control">
                                            <option value="1" ' . $stat['anon'] . '>Anonim</option>
                                            <option value="0" ' . $stat['nonanon'] . '>Tidak</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="float-right">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-default modal-dismiss">Close</button>
                        <div>
                    </form>
                </div>
                ';

            return $output;
        }
    }

    function fetch_donasi_baru($kode)
    {
        // cek if package exists
        $query = $this->db->query(" SELECT jumlah_donasi, status, nama
                                    FROM tb_donasi_baru
                                    WHERE kode = '" . $kode . "'");
        if ($query->num_rows() > 0) {
            $result = $query->row_array();

            $amount = $result['jumlah_donasi'];
            $status = $result['status'];
            $nama = $result['nama'];

            if ($status == '0') {
                $stat['baru'] = "selected";
                $stat['konfirmasi'] = "";
                $stat['pending'] = "";
                $span = '<span class="badge badge-success">Baru</span>';
            } elseif ($status == '2') {
                $stat['baru'] = "";
                $stat['konfirmasi'] = "";
                $stat['pending'] = "selected";
                $span = '<span class="badge badge-primary">Sudah dikonfirmasi</span>';
            } else {
                $stat['baru'] = "";
                $stat['konfirmasi'] = "selected";
                $stat['pending'] = "";
                $span = '<span class="badge badge-warning">Pending</span>';
            }

            $output = '
                <header class="card-header">
                    <h2 class="card-title">Detail Donasi</h2>
                </header>
                <div class="card-body">
                    <div class="text-center">
                        <h3 class="font-weight-semibold mt-1 mb-2 text-center">' . $span . '</h3>
                    </div>
                    <form class="form-horizontal form-bordered" action="' . site_url() . 'adminpanel/updatedonasibaru/' . $kode . '" method="post">
                        <h4 class="text-left pb-0 mt-3">Info Donasi</h4>
                        <table class="table table-responsive-md table-striped table-bordered mb-5">
                            <tbody>
                                <tr>
                                    <td>Kode</td>
                                    <td><b>' . $kode . '<b></td>
                                </tr>
                                <tr>
                                    <td>Donatur</td>
                                    <td>' . $nama . '</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Donasi</td>
                                    <td>Rp ' . rupiah($amount) . '</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <select name="status" class="form-control">
                                            <option value="0" ' . $stat['baru'] . '>Baru</option>
                                            <option value="1" ' . $stat['konfirmasi'] . '>Konfirmasi</option>
                                            <option value="2" ' . $stat['pending'] . '>Pending</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="float-right">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-default modal-dismiss">Close</button>
                        <div>
                    </form>
                </div>
                ';

            return $output;
        }
    }
} //end model
