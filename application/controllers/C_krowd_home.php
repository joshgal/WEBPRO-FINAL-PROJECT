<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_krowd_home extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('krowd_model');
    } 

	public function index()
	{
		$data['project'] = $this->krowd_model->get_all_projects_brief();
		$this->load->view('main_menu',$data);
	}

	public function about()
	{
		$this->load->view('about');
	}
	public function privacy()
	{
		$this->load->view('privacy');
	}
	public function faq(){
		$this->load->view('faq');
	}
	public function term(){
		$this->load->view('term');
	}
}
