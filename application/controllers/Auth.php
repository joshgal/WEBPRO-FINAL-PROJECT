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
        $this->form_validation->set_rules('username','Username','required|trim',[
            'required' =>'Please fill all fields']);
        $this->form_validation->set_rules('password','Password','required|trim');
        if($this->form_validation->run() != TRUE){
            $this->load->view('page_header');
            $this->load->view('auth/login');
            $this->load->view('page_footer');
        }else{
            $this->Auth_model->login();
        }

    }

    public function registrasi(){
        $this->form_validation->set_rules('username','Username','required|trim',[
            'required' =>'Please fill all fields'
        ]);
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
            'required' =>'Please fill all fields',
            'is_unique' =>'This email has already registered'
        ]);
        $this->form_validation->set_rules('password','Password','required|trim|min_length[3]|matches[re_password]',[
            'matches' => 'Password do not match',


        ]);
        $this->form_validation->set_rules('re_password','Re_password','required|trim|min_length[3]|matches[password]');
        // $this->form_validation->set_rules('submit', 'Submit', 'required',[
            // 'required' =>'Please accept our terms of service']);
        if($this->form_validation->run() != TRUE){
            $this->load->view('page_header');
            $this->load->view('auth/registrasi');
            $this->load->view('page_footer');
        }else{
             $this->Auth_model->registrasi();
               redirect('auth/login');
            }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('C_krowd_home');
    }

}
