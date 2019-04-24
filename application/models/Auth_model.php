<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
    public function login(){
        $username = $this->input->post('username');
        $password =  $this->input->post('password');
        $cek = $this->db->get_where('user',['username' => $username])->row_array();
        if($cek){
            //jika username ada
            if(password_verify($password, $cek['password'])){
                $data = [
                    'username' => $cek['username'],
                    'email' => $cek['email']
                ];
                    $this->session->set_userdata($data);
                    redirect('user');
            }else{
                $this->session->set_flashdata('flash','<div class="text-danger" role="alert">Unable to log in with provided credentials.</div>');
            }

        }else{
            $this->session->set_flashdata('message','Gk ada');
            redirect('auth/login');
        }
    }
    public function registrasi(){
    $data = [
        "username" => $this->input->post('username', true),
        "email" => $this->input->post('email', true),
        "password" => password_hash($this->input->post('password', true), PASSWORD_DEFAULT)
    ];

    return $this->db->insert('user', $data);
}
}
