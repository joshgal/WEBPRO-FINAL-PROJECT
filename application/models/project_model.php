<?php

class Project_model extends CI_Model{

  public function addProject($id_user){
    $post = $this->input->post();

    $data = array(
      "id_user" => $id_user,
      "judul_project" => $post['judul_project'],
      "kategori" => $post['kategori']
    );

    $this->db->insert("project", $data);

    return $this->db->get_where('project', $data)->row();
  }

  public function getProjectByID($id_project){
    return $this->db->get_where('project', ['id_project' => $id_project])->row();
  }

  public function update(){
    $post = $this->input->post();

    $data = array(
      "judul_project" => $post["judul_project"],
      "kategori" => $post["kategori"],
      "upload_image" => $post["upload_image"],
      "short_desc" => $post["short_desc"],
      "deskripsi" => $post["deskripsi"],
      "lokasi" => $post["lokasi"],
      "start_date" => $post["end_date"],
      "bidang_keahlian" => $post["bidang_keahlian"]
    );

    $this->db->update('project', $data, array('id_project' => $post["id_project"]));
  }

  public function delete($id_project){
    return $this->db->delete('project', array('id_project' => $id_project));
  }
}
