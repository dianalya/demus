<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
	{
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');

        if( $this->form_validation->run() == false)
        {
            $this->load->view('template/auth-header');
		    $this->load->view('auth/login');
		    $this->load->view('template/auth-footer');
        }
        else {
            //validasi sukses
            $this->_login();
         }
    }

    private function _login()
   {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $user = $this->db->get_where('user', ['username' => $username])->row_array();
      //jika user ada
      if ($user) {
         //jika user aktif
         if ($user['is_active'] == 1) {
            //cek password
            if (password_verify($password, $user['password'])) {
               //password benar
               $data = [
                  'username' => $user['username'],
                  'role_id' => $user['role_id'],
               ];
               $this->session->set_userdata($data);
               if ($user['role_id'] == 1) {
                  redirect('admin');
               } else {
                  redirect('page');
               }
            } else {
               //password tidak sama
               $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-danger">Wrong password!</div></div>');
               redirect('auth');
            }
         } else {
            //tidak aktif
            $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-danger">Username has not ben activated!</div></div>');
            redirect('auth');
         }
      } else {
         //tidak ada
         $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-danger">Username is not registered!</div></div>');
         redirect('auth');
      }
   }

    
    public function register()
	{   
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'username sudah digunakan'
         ]);
         $this->form_validation->set_rules('name', 'Name', 'required|trim');
         $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'email sudah digunakan'
         ]);
         $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');
   
         if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
   
            $data['title'] = 'Registration';
            $data['dec'] = 'good';
   
            $this->load->view('template/auth-header');
            $this->load->view('auth/register');
            $this->load->view('template/auth-footer');
         } else {
            $data = [
               'name' => htmlspecialchars($this->input->post('nama', true)),
               'username' => htmlspecialchars($this->input->post('username', true)),
               'email' => htmlspecialchars($this->input->post('email')),
               'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
               'role_id' => 2,
               'images' => 'default.jpg',
               'is_active' => 1,
               'date_created' => time()
            ];
   
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-success"><strong>Well done!</strong> You successfully add Member.</div></div>');
            redirect('auth');
         }
            
    }
    
}
