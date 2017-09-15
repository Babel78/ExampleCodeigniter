<?php
class User extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }
    function getUser()
    {
        $query=$this->db->get('usuario');
        return $query->result();
    }
}
    
