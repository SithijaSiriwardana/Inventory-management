<?php

class DashBoard_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
    }

    public function countTotalProducts()
	{
		$query = $this->db->get('product');
		return $query->num_rows();
	}

    public function countTotalOrders()
	{
		$query = $this->db->get('orders');
		return $query->num_rows();
	}


	public function countTotalEmployees()
	{
		$query = $this->db->get('employee_details');
		return $query->num_rows();
	}

	public function countTotalSupliers()
	{
		$query = $this->db->get('suplier_details');
		return $query->num_rows();
	}

}