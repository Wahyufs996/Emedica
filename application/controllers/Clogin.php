<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mlogin");
        $this->load->library('form_validation');
    }

    public function index()
    {

        // jika form login disubmit
        if($this->input->post()){
            if($this->Mlogin->doLogin()) redirect(site_url('dashboard'));
        }

        // tampilkan halaman login
        $this->load->view("user/login.php");
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}
