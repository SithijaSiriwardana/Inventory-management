<?php

class Order_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
    }
    
    public function create($data){
		$query = $this->db->insert('orders',$data);
			if($query){
				return "success";
			}else{
				return "failed";
			}
    }
	
	public function view(){
        $query=$this->db->get('product');
        return($query->result());
	}
	
	public function vieworders(){
        $query=$this->db->get('orders');
        return($query->result());
    }


    public function read($id){
        $query=$this->db->get_where('orders',"id=$id");
        return($query->result());
    }

    public function get_record_byID($id){
	    $query =  $this->db->get_where('orders', array('order_id' => $id));
	    return $query->row();
    }

    public function update($data,$id){
		$query = $this->db->update('orders', $data,"order_id=$id");
			if($query){
				return "success";
			}else{
				return "failed";
			}
    }

    public function delete($id){
		$query = $this->db->delete('orders', array('order_id' => $id)); 
		if($query){
			return "success";
		}else{
			return "failed";
		}
	}
 
}