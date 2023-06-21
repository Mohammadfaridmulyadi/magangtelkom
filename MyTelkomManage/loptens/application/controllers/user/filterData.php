<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class FilterData extends CI_Controller{

    public function dataFilter()
    {
        
    $data['title'] = "Filter Data LOP";
    $user_id = $this->session->userdata('user_id');
    $status_lop = $this->input->get('status_lop');
    $this->load->library('pagination');

    // Mendapatkan total data lop
    $query = "SELECT COUNT(*) as count FROM lop WHERE id_user = ? AND status_lop = ?";
    $result = $this->db->query($query, array($user_id, $status_lop));
    $total_rows = $result->row()->count;

    // Konfigurasi pagination
    $config['base_url'] = base_url('user/filterData/dataFilter?status_lop=' . urlencode($status_lop));
    $config['total_rows'] = $total_rows;
    $config['per_page'] = 5;

    // Style pagination
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'First';
    $config['first_tag_open'] = '<li class="page-item page-link">';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = 'Last';
    $config['last_tag_open'] = '<li class="page-item page-link">';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&raquo;';
    $config['next_tag_open'] = '<li class="page-item page-link">';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo;';
    $config['prev_tag_open'] = '<li class="page-item page-link">';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li class="page-item page-link">';
    $config['num_tag_close'] = '</li>';

    // Inisialisasi library pagination
    $this->pagination->initialize($config);

    // Mengambil data lop berdasarkan halaman saat ini
    $start = $this->uri->segment(4, 0);
    $data['lop'] = $this->db->query("SELECT lop.id_lop, lop.id_user, lop.judul, lop.nama_pelanggan, lop.status_lop, 
    lop.no_proposal, lop.dok_proposal, lop.no_kontrak, lop.dok_kontrak, lop.no_baso, lop.dok_baso,
    user.nama_user, user.rule, detail.langganan, detail.alamat, detail.tipe,
    detail.harga, detail.kategori, detail.status, detail.segment, detail.nomor_order
    FROM lop
    INNER JOIN user ON lop.id_user = user.id_user
    INNER JOIN detail ON lop.id_lop = detail.id_lop
    WHERE lop.id_user = ? AND lop.status_lop = ?
    LIMIT ?, ?", array($user_id, $status_lop, $start, $config['per_page']))->result();

        $perPage = $config['per_page'];
        $totalData = $total_rows; // Jumlah total data dari query sebelumnya


        $currentPage = ($start / $perPage) + 1;
        $currentNumber = ($currentPage - 1) * $perPage + 1;
        $endNumber = min($currentNumber + $perPage - 1, $totalData);

        $data['paginationInfo'] = $currentNumber . '-' . $endNumber . ' dari ' . $totalData;

        $data['lup'] = $this->db->query("SELECT lop.id_lop, lop.id_user, lop.judul, lop.nama_pelanggan, lop.status_lop,
        lop.no_proposal, lop.dok_proposal, lop.no_kontrak, lop.dok_kontrak, lop.no_baso, lop.dok_baso, 
        user.nama_user, user.rule, detail.langganan, detail.alamat, detail.tipe, 
        detail.harga, detail.kategori, detail.status, detail.segment, detail.nomor_order
        FROM lop
        INNER JOIN user ON lop.id_user = user.id_user
        INNER JOIN detail ON lop.id_lop = detail.id_lop
        WHERE lop.id_user = $user_id")->result();

        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/filterData', $data);
        $this->load->view('templates_user/footer');

    }

}
?>