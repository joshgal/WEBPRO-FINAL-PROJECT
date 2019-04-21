<?php
 
class krowd_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_all_projects_brief()
    {
    	$this->db->select('project.judul_project, user.username, project.kategori, project.short_desc, DATEDIFF(project.end_date,CURDATE()) AS "days_left", COUNT(queue.id_user) as "joined_user", project.max_user, project.popularity, project.admin_check, project.upload_image');
    	$this->db->from('project');
    	$this->db->join('user','project.id_user = user.id_user');
    	$this->db->join('queue', 'queue.id_project = project.id_project');
    	$this->db->group_by('project.id_project');
    	$query = $this->db->get();
    	return $query->result_array();
    }
}