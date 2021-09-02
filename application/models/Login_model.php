<?php
class Login_model extends CI_Model
{

    function login($user, $pass, $table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('username', $user);
        $this->db->where('password', $pass);
        $query = $this->db->get();
        return $query;
    }

    function masuk($user, $pass, $table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('nim', $user);
        $this->db->where('password', $pass);
        $query = $this->db->get();
        return $query;
    }


}
