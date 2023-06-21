<?php 

class Login extends CI_Controller{

    public function index()
    {   
        $this->load->view('user/login');
    }
    public function process() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $rule = $this->input->post('rule');
    
        // Lakukan validasi login di sini (misalnya, cek username, password, dan rule di database)
    
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('rule', $rule);
        $query = $this->db->get('user');
    
        if ($query->num_rows() > 0) {
            // Jika login berhasil, atur sesi pengguna atau lakukan tindakan lain
            $user = $query->row();
            $this->session->set_userdata('user_id', $user->id_user);
            $this->session->set_userdata('username', $user->nama_user);
    
            // Redirect ke halaman dashboard yang sesuai dengan rule
            if ($user->rule == 'Acount Manager') {
                redirect('user/dashboard');
            } elseif ($user->rule == 'support') {
                redirect('user/dashboard');
            }
        } else {
            // Jika login gagal, tampilkan pesan kesalahan atau lakukan tindakan lain
            redirect('user/login?error=1'); // Redirect kembali ke halaman login dengan pesan error
        }
    }
}
?>