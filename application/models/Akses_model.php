<?php
class Akses_model extends CI_Model
{
    function getProfil()
    {
        $nim = $this->session->userdata("nim"); // dapatkan id user yg login
        $this->db->select('*');
        $this->db->where('nim', $nim);
        $this->db->from('user');
        $query = $this->db->get("");
        return $query;
    }

    function updateProfile($nim,$data)
    {
        return $this->db->update('user',$data,['nim'=>$nim]);
    }
}