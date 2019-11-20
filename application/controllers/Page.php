<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('landing/index');
        $this->load->view('template/footer');
    }

    public function musik()
    {
        $this->load->view('template/header');
        $this->load->view('landing/musik');
        $this->load->view('template/footer');
    }

    public function detailmusik()
    {
        $this->load->view('template/header');
        $this->load->view('landing/detailmusik');
        $this->load->view('template/footer');
    }

    public function about()
    {
        $this->load->view('template/header');
        $this->load->view('landing/about');
        $this->load->view('template/footer');
    }
}
