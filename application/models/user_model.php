<?php

class User_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    
    public function userdetails($username){
        $query = $this->db->get_where('users',array('user_id' => $username));
        $row = $query->row();
        $getuser = array(
          'uname'=>$row->user_id,
          'rpass'=>$row->password  
        );
        
        return $getuser;
    }
}

