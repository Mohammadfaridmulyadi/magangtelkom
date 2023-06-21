<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{
    public function Index(){
        $data['title'] = "Dashboard";


        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/dashboard', $data);
        $this->load->view('templates_user/footer');
    }
}

?> 