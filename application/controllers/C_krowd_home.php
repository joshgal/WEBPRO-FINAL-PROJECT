<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_krowd_home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	//function to load home menu
	public function index()
	{
		$data = [
				'username' => 'basil',
				'email' => 'basilhaidi65@gmail.com'
		];
		$this->session->set_userdata($data);
		$this->load->view('main_menu');
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
