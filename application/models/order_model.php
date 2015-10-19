<?php

class Order_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }

    public function insert($table,$data){
        $query = $this->db->insert($table,$data);
        return $query;
    }
    public function get_id($table,$data) {
        $query = $this->db->get_where($table, array('user_id' => $data['user_id'],'order_date'=>$data['order_date']));
        return $query->row_array();
    }

    public function get_my_orders($table,$data){
        $query = $this->db->get_where($table, array('user_id' => $data['user_id']));
        return $query->result_array();
    }

    public function get_orders($order_id)
    {
        $query = $this->db->get_where('orders', array('order_id' => $order_id));
        return $query->row_array();
    }

    public function complete($data,$oid){
        $this->db->update('orders', $data, "order_id = $oid");
    }

    public function history($userid){

        $query = $this->db->get_where('orders', array('user_id' => $userid,'assigned_status'=>'COMPLETE'));
        return $query->result_array();
    }

}

