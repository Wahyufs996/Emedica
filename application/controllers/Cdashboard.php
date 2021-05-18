<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cdashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model("Mdashboard");
        $this->load->library('form_validation');

        $this->load->model("Mlogin");
        if($this->Mlogin->isNotLogin()) redirect(site_url('login'));

    }

    public function index()
    {
        // $data["dashboard"] = $this->Mdashboard->getAll();
        $this->load->view("dashboard/index");
    }


}
