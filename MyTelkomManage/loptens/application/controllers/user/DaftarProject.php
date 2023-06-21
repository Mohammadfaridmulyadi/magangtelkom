<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class DaftarProject extends CI_Controller{

    public function index()
    {   
        $data['title'] = "Daftar Proyek";
        $user_id = $this->session->userdata('user_id');
        $this->load->library('pagination');

        // Mendapatkan total data lop
        $total_rows = $this->db->query("SELECT COUNT(*) as count FROM lop WHERE id_user = $user_id")->row()->count;
        
        // Konfigurasi pagination
        $config['base_url'] = base_url('user/daftarProject/index');
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
        // $this->load->library('pagination');
        
        // Mengambil data lop berdasarkan halaman saat ini
        $start = $this->uri->segment(4, 0);
        $data['lop'] = $this->db->query("SELECT lop.id_lop, lop.id_user, lop.judul, lop.nama_pelanggan, lop.status_lop, 
        lop.no_proposal, lop.dok_proposal, lop.no_kontrak, lop.dok_kontrak, lop.no_baso, lop.dok_baso,
        user.nama_user, user.rule, detail.langganan, detail.alamat, detail.tipe,
        detail.harga, detail.kategori, detail.status, detail.segment, detail.nomor_order
        FROM lop
        INNER JOIN user ON lop.id_user = user.id_user
        INNER JOIN detail ON lop.id_lop = detail.id_lop
        WHERE lop.id_user = $user_id
        LIMIT $start, " . $config['per_page'])->result();

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
        $this->load->view('user/daftarProject', $data);
        $this->load->view('templates_user/footer');
    }

   



    public function tambahData(){
        $data['title'] = "Tambah Lop";
        // $data['jabatan'] = $this->loptensModel->get_data('data_jabatan')->result();
        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/tambahDataLop', $data);
        $this->load->view('templates_user/footer');

    }

    public function tambahDataAksi()
    {
        // Ambil data dari formulir tambah data
        $id_user = $this->session->userdata('user_id');
        $judul = $this->input->post('judul');
        $nama_pelanggan = $this->input->post('nama_pelanggan');
        $segment = $this->input->post('segment');
        // $alamat = $this->input->post('alamat');
        // $langganan = $this->input->post('langganan');
        // $tipe = $this->input->post('tipe');
        // $kategori = $this->input->post('kategori');
        // $status = $this->input->post('status');
        // $nomor_order = $this->input->post('nomor_order');
        // $harga = $this->input->post('harga');
        $status_lop = "Lead";

        // Data untuk tabel 'lop'
        $data_lop = array(
            'id_user'        => $id_user,
            'judul'          => $judul,
            'nama_pelanggan' => $nama_pelanggan,
            'status_lop'     => $status_lop
        );

        // Insert data ke tabel 'lop'
        $this->loptensModel->insert_data('lop', $data_lop);

        // Ambil ID lop yang baru saja ditambahkan
        $id_lop = $this->db->insert_id();

        // Data untuk tabel 'detail'
        $data_detail = array(
            'id_user'       => $id_user,
            'id_lop'        => $id_lop,
            'segment'       => $segment,
            // 'langganan'     => $langganan,
            // 'alamat'        => $alamat,
            // 'kategori'      => $kategori,
            
            // 'tipe'          => $tipe,
            // 'harga'         => $harga,
            // 'status'        => $status,
            // 'nomor_order'   => $nomor_order
        );

        // Insert data ke tabel 'detail'
        $this->loptensModel->insert_data('detail', $data_detail);

        // Redirect ke halaman daftar project
        redirect('user/daftarProject');
    }

    


    
    



}
?>