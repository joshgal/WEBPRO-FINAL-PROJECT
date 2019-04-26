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
        $this->form_validation->set_rules('go', 'Go', 'required',[
            'required' =>'Please accept our terms of service']);
        if($this->form_validation->run() != TRUE){
            $this->load->view('page_header');
            $this->load->view('auth/registrasi');
            $this->load->view('page_footer');
        }else{
             $this->Auth_model->registrasi();
               redirect('auth/login');
            }


    }
    public function ubah()
	{
		
		
	
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('kota','Kota','required');
        $this->form_validation->set_rules('short_bio','Short_bio','required');
        $this->form_validation->set_rules('experience','Experience','required');
        $this->form_validation->set_rules('portfolio','Portfolio','required');
		


		
		if($this->form_validation->run() != TRUE){
            $this->load->view('page_header2');
            $this->load->view('user/settings');  
            $this->load->view('page_footer');  
		}else{
			
			
		$ubah= $this->Auth_model->ubahprofil();
		if($ubah) $this->session->set_flashdata('flash','Data berhasil di ubah');
		else $this->session->set_flashdata('flash', 'Data gagal di ubah');
		redirect('settings');		
		}




}
public function hapusAccount(){
$delete = $this->Auth_model->deleteAccount();
if($delete) $this->session->set_flashdata('flash','Data berhasil di hapus');
else $this->session->set_flashdata('flash', 'Data gagal di hapus');
redirect('auth/login');		
}
public function changePassword(){
    $this->form_validation->set_rules('old_password', 'Current Password', 'required|alpha_numeric|min_length[3]|max_length[20]');
$this->form_validation->set_rules('new_password', 'New Password', 'required|alpha_numeric|min_length[3]|max_length[20]');
$this->form_validation->set_rules('re_password', 'Confirm New Password', 'required|alpha_numeric|min_length[3]|max_length[20]');

$id = $this->session->userdata('id_user');
    if ($this->form_validation->run() == true) {
        if (password_verify($this->input->post('old_password'), $this->session->userdata('password'))) {
            if ($this->input->post('new_password') != $this->input->post('re_password')) {
                $this->session->set_flashdata('flash', show_err_msg('Password Baru dan Konfirmasi Password harus sama'));
                redirect('user');
            } else {
                $data = ['password' => get_hash($this->input->post('new_password'))];
                $result = $this->Auth_model->update($data, $id);
                if ($result > 0) {
                    $this->updateProfil();
                    $this->session->set_flashdata('flash', 'Password Berhasil diubah');
                    redirect('user');
                } else {
                    $this->session->set_flashdata('flash', 'Password Gagal diubah');
                    redirect('user');
                }
            }
        } else {
            $this->session->set_flashdata('flash', 'Password Salah');
            redirect('user');
        }
    } else {
        $this->session->set_flashdata('flash', validation_errors());
        redirect('user');
    }



}
}