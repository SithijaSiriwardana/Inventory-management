<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Users_model');
	}

	public function index(){
		$data['employee_details'] = $this->Users_model->getAllUsers();
		$this->load->view('templetes/header');
		$this->load->view('emp_view/user_list.php', $data);
	}

	public function addnew(){
		$this->load->view('templetes/header');
		$this->load->view('emp_view/addform.php');
	}

	public function insert(){
		
		$user['Full_name'] = $this->input->post('Full_name');
		$user['National_id'] = $this->input->post('National_id');
		$user['Date_of_Birth'] = $this->input->post('Date_of_Birth');
		$user['Gender'] = $this->input->post('Gender');
		$user['Marital_status'] = $this->input->post('Marital_status');
		$user['Job_title'] = $this->input->post('Job_title');
		$user['Address'] = $this->input->post('Address');
		$user['Mobile'] = $this->input->post('Mobile');
		$user['Email'] = $this->input->post('Email');


		
		$query = $this->Users_model->insertuser($user);

		if($query){
			$data['employee_details'] = $this->Users_model->getAllUsers();
			$this->load->view('templetes/header');
			$this->load->view('emp_view/user_list.php', $data);
		}

	}

	public function edit($id){
		$data['employee_details'] = $this->Users_model->getUser($id);
		echo $data['employee_details']->Full_Name;
		$this->load->view('templetes/header');
		$this->load->view('emp_view/editform', $data);
	}

	public function update($id){
		
		$user['Full_name'] = $this->input->post('Full_name');
		$user['National_id'] = $this->input->post('National_id');
		$user['Date_of_Birth'] = $this->input->post('Date_of_Birth');
		$user['Gender'] = $this->input->post('Gender');
		$user['Marital_status'] = $this->input->post('Marital_status');
		$user['Job_title'] = $this->input->post('Job_title');
		$user['Address'] = $this->input->post('Address');
		$user['Mobile'] = $this->input->post('Mobile');
		$user['Email'] = $this->input->post('Email');

		$query = $this->Users_model->updateuser($user, $id);

		if($query){
			$data['employee_details'] = $this->Users_model->getAllUsers();
			$this->load->view('templetes/header');
			$this->load->view('emp_view/user_list.php', $data);
		}
	}

	public function delete($id){
		$query = $this->Users_model->deleteuser($id);

		if($query){
			$data['employee_details'] = $this->Users_model->getAllUsers();
			$this->load->view('templetes/header');
			$this->load->view('emp_view/user_list.php', $data);
		}
	}
}


?>