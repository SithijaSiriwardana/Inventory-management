<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllUsers(){
			$query = $this->db->get('employee_details');
			return $query->result(); 
		}

		public function insertuser($user){
			return $this->db->insert('employee_details', $user);
		}

		public function getUser($id){
			return $this->db->get_where('employee_details',array('id'=>$id))->row();
			
		}

		public function updateuser($user, $id){
			$this->db->where('employee_details.id', $id);
			return $this->db->update('employee_details', $user);
		}

		public function deleteuser($id){
			$this->db->where('employee_details.id', $id);
			return $this->db->delete('employee_details');
		}

	}
?>