<?php defined('BASEPATH') OR exit ('no direct script access')

/**
 *
 */
class project_model extends CI_Model
{

  public function update(){
    $post = $this->input->post(); // ambil data dari form
    $data{
      'judul_project' => $post['ini']
    }


  }
}
