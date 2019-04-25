<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_manage_project extends CI_Controller {

	//function to load Manage Project menu
	public function index()
	{
		$this->load->view('manage');
	}
}
