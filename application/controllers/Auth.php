<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
    }
    public function index(){
        $this->load->view('page_header');
        $this->load->view('Auth/login');
        $this->load->view('page_footer');

    }
    public function login(){
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
        if($this->form_validation->run() != TRUE){
            $this->load->view('page_header');
            $this->load->view('auth/Login');
            $this->load->view('page_footer');
        }else{
            $this->Auth_model->login();
        }

    }

    public function registrasi(){
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email');
        $this->form_validation->set_rules('password','Password','required|trim|min_length[3]|matches[re_password]');
        $this->form_validation->set_rules('re_password','Re_password','required|trim|min_length[3]|matches[password]');

        if($this->form_validation->run() != TRUE){
            $this->load->view('page_header');
            $this->load->view('auth/registrasi');
            $this->load->view('page_footer');
        }else{

             $this->Auth_model->registrasi();
               redirect('auth/Login');
            }


    }

}
