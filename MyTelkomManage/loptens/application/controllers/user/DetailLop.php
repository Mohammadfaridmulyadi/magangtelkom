<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class DetailLop extends CI_Controller{

    public function index()
    {   
        $user_id = $this->session->userdata('user_id');
        $id_lop = $this->input->get('id');
        // $id_lop = $this->input->post('id');
        $data['title'] = "Detail List Of Project";
        $data['id_lop'] = $id_lop;

        $data['detail'] = $this->db->query("SELECT lop.id_lop, lop.id_user, lop.judul, lop.nama_pelanggan, lop.status_lop,
        lop.no_proposal, lop.dok_proposal, lop.no_kontrak, lop.dok_kontrak, lop.no_baso, lop.dok_baso, 
        user.nama_user, user.rule, detail.langganan, detail.alamat, detail.tipe, 
        detail.harga, detail.kategori, detail.status, detail.segment, detail.nomor_order
        FROM lop
        INNER JOIN user ON lop.id_user = user.id_user
        INNER JOIN detail ON lop.id_lop = detail.id_lop
        WHERE lop.id_user = $user_id
        AND lop.id_lop = $id_lop")->result();

        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/detailLop', $data);
        $this->load->view('templates_user/footer');
    }

    public function updateData()
    {   
        $user_id = $this->session->userdata('user_id');
        $id_lop = $this->input->get('id');
        // $id_lop = $this->input->post('id');
        $data['title'] = "Update Data LOP";
        $data['id_lop'] = $id_lop;

        $data['detail'] = $this->db->query("SELECT lop.id_lop, lop.id_user, lop.judul, lop.nama_pelanggan, lop.status_lop,
        lop.no_proposal, lop.dok_proposal, lop.no_kontrak, lop.dok_kontrak, lop.no_baso, lop.dok_baso, 
        user.nama_user, user.rule, detail.langganan, detail.alamat, detail.tipe, 
        detail.harga, detail.kategori, detail.status, detail.segment, detail.nomor_order
        FROM lop
        INNER JOIN user ON lop.id_user = user.id_user
        INNER JOIN detail ON lop.id_lop = detail.id_lop
        WHERE lop.id_user = $user_id
        AND lop.id_lop = $id_lop")->result();

        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/updateDataLop', $data);
        $this->load->view('templates_user/footer');
    }

    public function updateDataLop()
    {
        $this->load->model('loptensModel');

        $id_lop = $this->input->post('id_lop');
        $id_user = $this->session->userdata('user_id');
        $judul = $this->input->post('judul');
        $nama_pelanggan = $this->input->post('nama_pelanggan');
        $alamat = $this->input->post('alamat');
        $langganan = $this->input->post('langganan');
        $segment = $this->input->post('segment');
        $tipe = $this->input->post('tipe');
        $kategori = $this->input->post('kategori');
        $status = $this->input->post('status');
        $nomor_order = $this->input->post('nomor_order');
        $harga = $this->input->post('harga');
        
        $data_lop = array(
            'id_user'        => $id_user,
            'judul'          => $judul,
            'nama_pelanggan' => $nama_pelanggan,
        );

        $where = array(
            'id_lop' => $id_lop
        );

        $this->loptensModel->update_data('lop', $data_lop, $where);

        $data_detail = array(
            'id_user'       => $id_user,
            'id_lop'        => $id_lop,
            'langganan'     => $langganan,
            'alamat'        => $alamat,
            'kategori'      => $kategori,
            'segment'       => $segment,
            'tipe'          => $tipe,
            'harga'         => $harga,
            'status'        => $status,
            'nomor_order'   => $nomor_order
        );

        $this->loptensModel->update_data('detail', $data_detail, $where);
        redirect('user/detailLop?id=' . $id_lop);
    }


    public function updateDataAksi()
    {
        $this->load->model('loptensModel');

        $id_lop = $this->input->post('id_lop');
        $no_proposal = $this->input->post('no_proposal');
        $no_kontrak = $this->input->post('no_kontrak');
        $no_baso = $this->input->post('no_baso');


        if (empty($no_proposal)) {
            $no_proposal = null;
        }
        if (empty($no_kontrak)) {
            $no_kontrak = null;
        }
        if (empty($no_baso)) {
            $no_baso = null;
        }
        
        // Melakukan penggunaan nilai yang sudah diubah (jika diperlukan)
        if ($no_proposal === null && $no_kontrak === null && $no_baso === null) {
            $status_lop = "Lead";
        } elseif ($no_proposal !== null && $no_kontrak === null && $no_baso === null) {
            $status_lop = "Proposal";
        } elseif ($no_proposal !== null && $no_kontrak !== null && $no_baso === null) {
            $status_lop = "Kontrak";
        } elseif ($no_proposal !== null && $no_kontrak !== null && $no_baso !== null) {
            $status_lop = "Baso";
        }
 
        $data = array(
            'no_proposal' => $no_proposal,
            'no_kontrak' => $no_kontrak,
            'no_baso' => $no_baso,
            'status_lop' => $status_lop
        );

        $where = array(
            'id_lop' => $id_lop
        );

        $dok_proposal = $_FILES['dok_proposal']['name'];
        if ($dok_proposal) {
            $config['upload_path']    = './assets/photo';
            $config['allowed_types']  = 'pdf';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('dok_proposal')) {
                $dok_proposal = $this->upload->data('file_name');
                $data['dok_proposal'] = $dok_proposal;
            } else {
                echo $this->upload->display_errors();
            }
        }

        $dok_kontrak = $_FILES['dok_kontrak']['name'];
        if ($dok_kontrak) {
            $config['upload_path']    = './assets/photo';
            $config['allowed_types']  = 'pdf';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('dok_kontrak')) {
                $dok_kontrak = $this->upload->data('file_name');
                $data['dok_kontrak'] = $dok_kontrak;
            } else {
                echo $this->upload->display_errors();
            }
        }

        $dok_baso = $_FILES['dok_baso']['name'];
        if ($dok_baso) {
            $config['upload_path']    = './assets/photo';
            $config['allowed_types']  = 'pdf';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('dok_baso')) {
                $dok_baso = $this->upload->data('file_name');
                $data['dok_baso'] = $dok_baso;
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->loptensModel->update_data('lop', $data, $where);
        redirect('user/detailLop?id=' . $id_lop);
    }

    public function deleteData($id_lop) {
        $this->load->model('LoptensModel');
        
        // Memanggil fungsi deleteDataWithDetail dari model
        $result = $this->LoptensModel->deleteDataWithDetail($id_lop);
        
        if ($result) {
            // Penghapusan berhasil, lakukan tindakan yang sesuai
            redirect('user/daftarProject');
        } else {
            // Terjadi kesalahan, lakukan tindakan yang sesuai
            // ...
        }
    }


   



}
?>