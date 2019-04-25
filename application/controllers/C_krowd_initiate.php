<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_krowd_initiate extends CI_Controller {

	function __construct() {
	      parent::__construct();
	      $this->load->model("Project_model");
	}

	public function index()
	{
		$this->load->view('initiate');
	}

	public function createProject(){
		$id_user = $this->session->userdata('id_user');
		$judul = $this->input->post('judul_project');
		$project = $this->Project_model->addProject($id_user);

		redirect('C_krowd_initiate/edit/'.$project->id_project);
	}

	public function edit($id_project)
	{
		$data['project'] = $this->Project_model->getProjectByID($id_project);
		$this->load->view('edit_initiate', $data);
	}

	public function save(){
		$this->Project_model->update();
		redirect('C_krowd_initiate/edit/'.$this->input->post('id_project'));
	}

	public function deleteProject($id_project){
		if ($this->Project_model->delete($id_project)) {
         redirect('C_krowd_home');
    }

	}
}
