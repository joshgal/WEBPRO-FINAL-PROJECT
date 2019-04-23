<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function index(){

        $data['user'] = $this->db->get_where('user',['username' =>$this->session->userdata('username')])->row_array();
        $this->load->view('page_header',$data);

        $this->load->view('main_menu');

        $this->load->view('page_footer');
    }
}
