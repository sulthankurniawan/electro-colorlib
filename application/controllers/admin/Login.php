<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // jika form login disubmit
        if($this->input->post()){
            if($this->admin_model->doLogin()) redirect(site_url('admin/products/'));
        }

        // tampilkan halaman login
        $this->load->view("admin/login.php");
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }
}