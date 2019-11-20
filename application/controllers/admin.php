<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin2/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin2/footer');
    }

    public function upload()
    {
        $this->load->view('admin2/header');
        $this->load->view('admin/upload');
        $this->load->view('admin2/footer');
    }
}
