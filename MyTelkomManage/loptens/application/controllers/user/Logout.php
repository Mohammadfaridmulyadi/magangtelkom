<?php 

class Logout extends CI_Controller{

    public function index()
    {   
        $this->session->unset_userdata('user_id'); // Hapus data sesi pengguna yang sedang login
        $this->session->sess_destroy(); // Hapus semua data sesi

        redirect('user/login'); // Redirect ke halaman login setelah logout
    }
}
?>